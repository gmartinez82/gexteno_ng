<?php 
require_once "base/BPrdOrdenTrabajo.php"; 
class PrdOrdenTrabajo extends BPrdOrdenTrabajo
{
    const PREFIJO_OT = 'OT-';
    
    public function getDescripcion()
    {
        $descripcion = '' . $this->getCodigo() . ' ' . date('Y-m-d H:i:s');
        return $descripcion;
    }
    
    
    /**
     * Inicializa o edita una orden de trabajo.
     * También inicializa el estado inicial de la orden de trabajo
     * 
     * @param integer | boolean $prd_orden_trabajo_id
     * @param integer $ins_insumo_id
     * @param integer $prd_prioridad_id
     * @param integer $prd_tipo_origen_id
     * @param integer $cli_cliente_id
     * @param integer $cantidad
     * @param integer | boolean $prd_proceso_productivo_id
     * @param string $observacion
     * @return object $prd_orden_trabajo
     * @created_at 04/2024
     * created_by Esteban Martinez
     */
    static function setInicializarOrdenTrabajo($prd_orden_trabajo_id = false, $ins_insumo_id, $prd_prioridad_id, $prd_tipo_origen_id, $cli_cliente_id = false, $cantidad = null, $observacion = '', $vta_presupuesto_ins_insumo_id = false, $prd_proceso_productivo_id = false)
    {
        $prd_orden_trabajo = ( ! $prd_orden_trabajo_id ) ? new self() : PrdOrdenTrabajo::getOxId($prd_orden_trabajo_id);
        $prd_orden_trabajo->setInsInsumoId($ins_insumo_id);
        $prd_orden_trabajo->setPrdPrioridadId($prd_prioridad_id);
        //$prd_orden_trabajo->setPrdTipoOrigenId($prd_tipo_origen_id);
        
        if ( $cli_cliente_id )
        {
            $prd_orden_trabajo->setCliClienteId($cli_cliente_id);
        }
        
        if ( ! is_null($cantidad) )
        {
            $prd_orden_trabajo->setCantidad($cantidad);
        }
        
        if ( $prd_proceso_productivo_id )
        {
            $prd_orden_trabajo->setPrdProcesoProductivoId($prd_proceso_productivo_id);
        }
        
        if ( $vta_presupuesto_ins_insumo_id )
        {
            $prd_orden_trabajo->setVtaPresupuestoInsInsumoId($vta_presupuesto_ins_insumo_id);
        }
        
        //------------------------------------------------------------------
        // Si no tiene tipo de origen entonces hace el set del valor
        //------------------------------------------------------------------
        if ( $prd_orden_trabajo->getPrdTipoOrigenId() == 'null' )
        {
            $prd_orden_trabajo->setPrdTipoOrigenId($prd_tipo_origen_id);
        }
        
        $prd_orden_trabajo->setObservacion($observacion);
        $prd_orden_trabajo->setFecha(date('Y-m-d'));
        $prd_orden_trabajo->setEstado(1);
        
        $prd_orden_trabajo->save();
        
        if ( ! $prd_orden_trabajo_id )
        {
            $prd_orden_trabajo->setCodigo(self::PREFIJO_OT . str_pad($prd_orden_trabajo->getId(), 8, 0, STR_PAD_LEFT));
            $prd_orden_trabajo->save();
            
            $obs = 'Orden de trabajo inicializada ' . date('d/m/Y H:i:s');
            $observacion  = ( ! empty($observacion) ) ? $observacion . ' - ' . $obs : $obs;
            $prd_orden_trabajo->setPrdOrdenTrabajoEstado(PrdOrdenTrabajoTipoEstado::TIPO_NO_INICIADA, $observacion);
        }
        else
        {
            $obs = 'Orden de trabajo editada ' . date('d/m/Y H:i:s');
            $observacion  = ( ! empty($observacion) ) ? $observacion . ' - ' . $obs : $obs;
            $prd_orden_trabajo->setPrdOrdenTrabajoEstado(PrdOrdenTrabajoTipoEstado::TIPO_NO_INICIADA, $observacion);
        }
        
        return $prd_orden_trabajo;
    }
    
    
    /**
     * Obtiene los ciclos de un proceso productivo.
     * A partir de la cantidad de la Orden de trabajo y de la cantidad del ciclo productivo se obtienen los ciclos.
     * Si no se recibe el id del proceso productivo obtiene el mismo vinculado en la orden de trabajo.
     * 
     * @param integer $prd_proceso_productivo_id;
     * @param integer $ciclos
     * @created_by Esteban Martinez
     */
    public function getCiclosProcesoProductivo($prd_proceso_productivo_id = false)
    {
        $prd_proceso_productivo = ( $prd_proceso_productivo_id ) ? PrdProcesoProductivo::getOxId($prd_proceso_productivo_id) : $this->getPrdProcesoProductivo();
        
        $cantidad_orden_trabajo = $this->getCantidad();
        $cantidad_proceso_productivo = $prd_proceso_productivo->getCantidad();
        
        $ciclos = ceil($cantidad_orden_trabajo / $cantidad_proceso_productivo);
        return $ciclos;
    }
    
    
    /**
     * Realiza la configuracion de la orden de trabajo.
     * Registra los ciblos, la orden trabajo operacion, orden de trabajo operacion estado, y la orden trabajo operacion equipo.
     * 
     * @param integer $prd_proceso_productivo_id
     * @param array $arr_prd_linea_produccion_ids
     * @param integer $prd_prioridad_id
     * @param integer $cli_cliente_id
     * @param integer | boolean $ope_operario_id
     * 
     * @return object $prd_orden_trabajo
     * @created_at 04/2024
     * @created_by Esteban Martinez
     */
    public function setConfigurarOrdenTrabajo__($prd_proceso_productivo_id, $arr_prd_linea_produccion_ids, $prd_prioridad_id, $cli_cliente_id = false, $ope_operario_id = false)
    {
        $cantidad_operarios = 0;
        $cantidad_equipos = 0;
        
        
        $prd_proceso_productivo = PrdProcesoProductivo::getOxId($prd_proceso_productivo_id);
        if ( $prd_proceso_productivo )
        {
            //-----------------------------------------------------------------------------------------------------
            // Obtener los ciclos
            //-----------------------------------------------------------------------------------------------------
            $ciclos = $this->getCiclosProcesoProductivo($prd_proceso_productivo_id);
            
            //-----------------------------------------------------------------------------------------------------
            // Recorrer los ciclos
            //-----------------------------------------------------------------------------------------------------
            for ( $ciclo = 1; $ciclo <= $ciclos; $ciclo++ )
            {
                $prd_linea_produccion = PrdLineaProduccion::getOxId($arr_prd_linea_produccion_ids[$ciclo]);
                
                if ( $prd_linea_produccion )
                {
                    //Gral::prr($prd_linea_produccion);
                    //-----------------------------------------------------------------------------------------------------
                    // Registrar Orden trabajo ciclo
                    //-----------------------------------------------------------------------------------------------------
                    $prd_orden_trabajo_ciclo = new PrdOrdenTrabajoCiclo();
                    $prd_orden_trabajo_ciclo->setPrdOrdenTrabajoId($this->getId());
                    $prd_orden_trabajo_ciclo->setPrdLineaProduccionId($prd_linea_produccion->getId());
                    $prd_orden_trabajo_ciclo->setNumero($ciclo);
                    $prd_orden_trabajo_ciclo->setOrden($ciclo);
                    $prd_orden_trabajo_ciclo->setEstado(1);
                    $prd_orden_trabajo_ciclo->save();
                    
                    //Gral::prr($prd_orden_trabajo_ciclo);
                    if ( $prd_orden_trabajo_ciclo->getId() != '' )
                    {
                        //-----------------------------------------------------------------------------------------------------
                        // Obtener operaciones
                        //-----------------------------------------------------------------------------------------------------
                        $prd_param_operacions = $prd_proceso_productivo->getPrdParamOperacions(null, null, true, array(array('campo' => 'numero', 'orden' => 'asc')));
                        
                        foreach ( $prd_param_operacions as $key => $prd_param_operacion )
                        {
                            //-----------------------------------------------------------------------------------------------------
                            // Registrar orden trabajo opercion
                            //-----------------------------------------------------------------------------------------------------
                            $prd_orden_trabajo_operacion = new PrdOrdenTrabajoOperacion();
                            $prd_orden_trabajo_operacion->setPrdOrdenTrabajoCicloId($prd_orden_trabajo_ciclo->getId());
                            $prd_orden_trabajo_operacion->setPrdParamOperacionId($prd_param_operacion->getId());
                            $prd_orden_trabajo_operacion->setNumero($prd_param_operacion->getNumero());
                            $prd_orden_trabajo_operacion->setEstado(1);
                            $prd_orden_trabajo_operacion->save();
                            
                            $prd_orden_trabajo_operacion->setCodigo(PrdOrdenTrabajoOperacion::PREFIJO_OT_OP . str_pad($prd_orden_trabajo_operacion->getId(), 8, 0, STR_PAD_LEFT));
                            $prd_orden_trabajo_operacion->save();
                            
                            $observacion = 'Orden de trabajo operación inicializada ' . date('d/m/Y H:i:s');
                            $prd_orden_trabajo_operacion->setPrdOrdenTrabajoOperacionEstado(PrdOrdenTrabajoOperacionTipoEstado::TIPO_NO_INICIADA, $observacion);
                            
                            if ( $prd_orden_trabajo_operacion )
                            {
                                //-----------------------------------------------------------------------------------------------------
                                // Buscar si hay equipo conigurado para la linea de produccion y para la operacion
                                //-----------------------------------------------------------------------------------------------------
                                $array = array(
                                    array('campo' => 'prd_linea_produccion_id', 'valor' => $prd_linea_produccion->getId()),
                                    array('campo' => 'prd_param_operacion_id', 'valor' => $prd_param_operacion->getId()),
                                    array('campo' => 'estado', 'valor' => 1),
                                );
                                
                                $prd_linea_produccion_prd_param_operacion_prd_equipos = PrdLineaProduccionPrdParamOperacionPrdEquipo::getOsxArray($array);
                                $cantidad_equipos = count($prd_linea_produccion_prd_param_operacion_prd_equipos);
                                foreach ( $prd_linea_produccion_prd_param_operacion_prd_equipos as $prd_linea_produccion_prd_param_operacion_prd_equipo)
                                {
                                    //-----------------------------------------------------------------------------------------------------
                                    //Registrar orden trabajo operacion equipo
                                    //-----------------------------------------------------------------------------------------------------
                                    $prd_orden_trabajo_operacion_prd_equipo = new PrdOrdenTrabajoOperacionPrdEquipo();
                                    $prd_orden_trabajo_operacion_prd_equipo->setPrdOrdenTrabajoOperacionId($prd_orden_trabajo_operacion->getId());
                                    $prd_orden_trabajo_operacion_prd_equipo->setPrdEquipoId($prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdEquipoId());
                                    $prd_orden_trabajo_operacion_prd_equipo->setEstado(1);
                                    $prd_orden_trabajo_operacion_prd_equipo->save();
                                }
                                
                                if ( $ope_operario_id )
                                {
                                    $cantidad_operarios = 1;
                                    
                                    //-----------------------------------------------------------------------------------------------------
                                    //Registrar orden trabajo operacion operario
                                    //-----------------------------------------------------------------------------------------------------
                                    $prd_orden_trabajo_operacion_prd_equipo = new PrdOrdenTrabajoOperacionOpeOperario();
                                    $prd_orden_trabajo_operacion_prd_equipo->setPrdOrdenTrabajoOperacionId($prd_orden_trabajo_operacion->getId());
                                    $prd_orden_trabajo_operacion_prd_equipo->setOpeOperarioId($ope_operario_id);
                                    $prd_orden_trabajo_operacion_prd_equipo->setEstado(1);
                                    $prd_orden_trabajo_operacion_prd_equipo->save();
                                }
                                
                                $prd_orden_trabajo_operacion->setCantidadOperarios($cantidad_operarios);
                                $prd_orden_trabajo_operacion->setCantidadEquipos($cantidad_equipos);
                                $prd_orden_trabajo_operacion->save();
                            }
                        }
                    }
                }
            }
            
            $this->setPrdProcesoProductivoId($prd_proceso_productivo_id);
            $this->setPrdPrioridadId($prd_prioridad_id);
            
            if ( $cli_cliente_id )
            {
                $this->setCliClienteId($cli_cliente_id);
            }
            
            $this->save();
            
            $observacion = 'Orden de trabajo configurada ' . date('d/m/Y H:i:s');
            $this->setPrdOrdenTrabajoEstado(PrdOrdenTrabajoTipoEstado::TIPO_CONFIGURADA, $observacion);
        }
        
        return $this;
    }
    
    
    /**
     * Realiza la configuracion de la orden de trabajo.
     * Registra los ciblos, la orden trabajo operacion, orden de trabajo operacion estado, y la orden trabajo operacion equipo.
     * 
     * @param integer $prd_proceso_productivo_id
     * @param array $arr_prd_linea_produccion_ids
     * @param integer $prd_prioridad_id
     * @param integer $cli_cliente_id
     * @param integer | boolean $ope_operario_id
     * 
     * @return object $prd_orden_trabajo
     * @created_at 04/2024
     * @created_by Esteban Martinez
     */
    public function setConfigurarOrdenTrabajo($prd_proceso_productivo_id, $arr_prd_linea_produccion_ids, $prd_prioridad_id, $cli_cliente_id = false, $ope_operario_id = false)
    {
        $cantidad_operarios = 0;
        $cantidad_equipos = 0;
        //$this->deleteAll();
        $prd_proceso_productivo = PrdProcesoProductivo::getOxId($prd_proceso_productivo_id);
        if ( $prd_proceso_productivo )
        {
            //-----------------------------------------------------------------------------------------------------
            //Buscar ciclos de PrdOrdenTrabajo y dar de baja:
            // - ProOrdenTrabajoCiclo
            // - ProOrdenTrabajoOperacion
            // - ProOrdenTrabajoOperacionEstado
            // - ProOrdenTrabajoOperacionPrdEquipo
            // - ProOrdenTrabajoOperacionOpeOperario
            //-----------------------------------------------------------------------------------------------------
            $prd_orden_trabajo_ciclos = $this->getPrdOrdenTrabajoCiclos();
            foreach ( $prd_orden_trabajo_ciclos as $prd_orden_trabajo_ciclo )
            {
                $prd_orden_trabajo_ciclo->deleteAll();
            }
            
            //-----------------------------------------------------------------------------------------------------
            // Obtener los ciclos
            //-----------------------------------------------------------------------------------------------------
            $ciclos = $this->getCiclosProcesoProductivo($prd_proceso_productivo_id);
            
            //-----------------------------------------------------------------------------------------------------
            // Recorrer los ciclos
            //-----------------------------------------------------------------------------------------------------
            for ( $ciclo = 1; $ciclo <= $ciclos; $ciclo++ )
            {
                $prd_linea_produccion = PrdLineaProduccion::getOxId($arr_prd_linea_produccion_ids[$ciclo]);
                
                if ( $prd_linea_produccion )
                {
                    //Gral::prr($prd_linea_produccion);
                    //-----------------------------------------------------------------------------------------------------
                    // Registrar Orden trabajo ciclo
                    //-----------------------------------------------------------------------------------------------------
                    $prd_orden_trabajo_ciclo = new PrdOrdenTrabajoCiclo();
                    $prd_orden_trabajo_ciclo->setPrdOrdenTrabajoId($this->getId());
                    $prd_orden_trabajo_ciclo->setPrdLineaProduccionId($prd_linea_produccion->getId());
                    $prd_orden_trabajo_ciclo->setNumero($ciclo);
                    $prd_orden_trabajo_ciclo->setOrden($ciclo);
                    $prd_orden_trabajo_ciclo->setEstado(1);
                    $prd_orden_trabajo_ciclo->save();
                    
                    //Gral::prr($prd_orden_trabajo_ciclo);
                    if ( $prd_orden_trabajo_ciclo->getId() != '' )
                    {
                        //-----------------------------------------------------------------------------------------------------
                        // Obtener operaciones
                        //-----------------------------------------------------------------------------------------------------
                        $prd_param_operacions = $prd_proceso_productivo->getPrdParamOperacions(null, null, true, array(array('campo' => 'numero', 'orden' => 'asc')));
                        
                        foreach ( $prd_param_operacions as $key => $prd_param_operacion )
                        {
                            //-----------------------------------------------------------------------------------------------------
                            // Registrar orden trabajo opercion
                            //-----------------------------------------------------------------------------------------------------
                            $prd_orden_trabajo_operacion = new PrdOrdenTrabajoOperacion();
                            $prd_orden_trabajo_operacion->setPrdOrdenTrabajoCicloId($prd_orden_trabajo_ciclo->getId());
                            $prd_orden_trabajo_operacion->setPrdParamOperacionId($prd_param_operacion->getId());
                            $prd_orden_trabajo_operacion->setNumero($prd_param_operacion->getNumero());
                            $prd_orden_trabajo_operacion->setEstado(1);
                            $prd_orden_trabajo_operacion->save();
                            
                            $prd_orden_trabajo_operacion->setCodigo(PrdOrdenTrabajoOperacion::PREFIJO_OT_OP . str_pad($prd_orden_trabajo_operacion->getId(), 8, 0, STR_PAD_LEFT));
                            $prd_orden_trabajo_operacion->save();
                            
                            $observacion = 'Orden de trabajo operación inicializada ' . date('d/m/Y H:i:s');
                            $prd_orden_trabajo_operacion->setPrdOrdenTrabajoOperacionEstado(PrdOrdenTrabajoOperacionTipoEstado::TIPO_NO_INICIADA, $observacion);
                            
                            if ( $prd_orden_trabajo_operacion )
                            {
                                //-----------------------------------------------------------------------------------------------------
                                // Buscar si hay equipo conigurado para la linea de produccion y para la operacion
                                //-----------------------------------------------------------------------------------------------------
                                $array = array(
                                    array('campo' => 'prd_linea_produccion_id', 'valor' => $prd_linea_produccion->getId()),
                                    array('campo' => 'prd_param_operacion_id', 'valor' => $prd_param_operacion->getId()),
                                    array('campo' => 'estado', 'valor' => 1),
                                );
                                
                                $prd_linea_produccion_prd_param_operacion_prd_equipos = PrdLineaProduccionPrdParamOperacionPrdEquipo::getOsxArray($array);
                                $cantidad_equipos = count($prd_linea_produccion_prd_param_operacion_prd_equipos);
                                foreach ( $prd_linea_produccion_prd_param_operacion_prd_equipos as $prd_linea_produccion_prd_param_operacion_prd_equipo)
                                {
                                    //-----------------------------------------------------------------------------------------------------
                                    //Registrar orden trabajo operacion equipo
                                    //-----------------------------------------------------------------------------------------------------
                                    $prd_orden_trabajo_operacion_prd_equipo = new PrdOrdenTrabajoOperacionPrdEquipo();
                                    $prd_orden_trabajo_operacion_prd_equipo->setPrdOrdenTrabajoOperacionId($prd_orden_trabajo_operacion->getId());
                                    $prd_orden_trabajo_operacion_prd_equipo->setPrdEquipoId($prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdEquipoId());
                                    $prd_orden_trabajo_operacion_prd_equipo->setEstado(1);
                                    $prd_orden_trabajo_operacion_prd_equipo->save();
                                }
                                
                                if ( $ope_operario_id )
                                {
                                    $cantidad_operarios = 1;
                                    
                                    //-----------------------------------------------------------------------------------------------------
                                    //Registrar orden trabajo operacion operario
                                    //-----------------------------------------------------------------------------------------------------
                                    $prd_orden_trabajo_operacion_prd_equipo = new PrdOrdenTrabajoOperacionOpeOperario();
                                    $prd_orden_trabajo_operacion_prd_equipo->setPrdOrdenTrabajoOperacionId($prd_orden_trabajo_operacion->getId());
                                    $prd_orden_trabajo_operacion_prd_equipo->setOpeOperarioId($ope_operario_id);
                                    $prd_orden_trabajo_operacion_prd_equipo->setEstado(1);
                                    $prd_orden_trabajo_operacion_prd_equipo->save();
                                }
                                
                                $prd_orden_trabajo_operacion->setCantidadOperarios($cantidad_operarios);
                                $prd_orden_trabajo_operacion->setCantidadEquipos($cantidad_equipos);
                                $prd_orden_trabajo_operacion->save();
                            }
                        }
                    }
                }
            }
            
            $this->setPrdProcesoProductivoId($prd_proceso_productivo_id);
            $this->setPrdPrioridadId($prd_prioridad_id);
            
            if ( $cli_cliente_id )
            {
                $this->setCliClienteId($cli_cliente_id);
            }
            
            $this->save();
            
            $observacion = 'Orden de trabajo configurada ' . date('d/m/Y H:i:s');
            $this->setPrdOrdenTrabajoEstado(PrdOrdenTrabajoTipoEstado::TIPO_CONFIGURADA, $observacion);
        }
        
        return $this;
    }
    
    
    /**
     * Obtiene los ciclos y operaciones de la ot y contabiliza los ciclos que tengan operacines finalizadas
     * 
     * @param integer $cantidad_ciclos_finalizados
     * @created_by Esteban Martinez
     */
    public function getCantidadPrdOrdenTrabajoCicloFinalizados()
    {
        $cantidad_ciclos_finalizados = 0;
        $prd_orden_trabajo_ciclos = $this->getPrdOrdenTrabajoCiclos(null, null, true);
        foreach ( $prd_orden_trabajo_ciclos as $prd_orden_trabajo_ciclo )
        {
            if ( $prd_orden_trabajo_ciclo->getEsCicloFinalizado() )
            {
                $cantidad_ciclos_finalizados++;
            }
        }
        return $cantidad_ciclos_finalizados;
    }
    
    
    /**
     * Obtiene los ciclos y operaciones de la ot y contabiliza los ciclos que tengan operacines iniciados
     * 
     * @param integer $cantidad_ciclos_iniciados
     * @created_by Esteban Martinez
     */
    public function getCantidadPrdOrdenTrabajoCicloIniciados()
    {
        $cantidad_ciclos_iniciados = 0;
        $prd_orden_trabajo_ciclos = $this->getPrdOrdenTrabajoCiclos(null, null, true);
        foreach ( $prd_orden_trabajo_ciclos as $prd_orden_trabajo_ciclo )
        {
            if ( $prd_orden_trabajo_ciclo->getEsCicloIniciado() )
            {
                $cantidad_ciclos_iniciados++;
            }
        }
        return $cantidad_ciclos_iniciados;
    }
    
    
    /**
     * Determina si la OT esta finalizado
     * Esta finalizado cuando todos sus ciclos estan finalizados
     * 
     * @return boolean
     */
    public function getEsOtFinalizado()
    {
        $prd_orden_trabajo_ciclos = $this->getPrdOrdenTrabajoCiclos(null, null, true);
        foreach ( $prd_orden_trabajo_ciclos as $prd_orden_trabajo_ciclo )
        {
            if ( ! $prd_orden_trabajo_ciclo->getEsCicloFinalizado() )
            {
                return false;
            }
        }
        return true;
    }
    
    
    /**
     * Determina si la OT esta no iniciada
     * Es no inciado cuando todos sus ciclos estan no iniciados
     * 
     * @return boolean
     */
    public function getEsOtNoIniciado()
    {
        $prd_orden_trabajo_ciclos = $this->getPrdOrdenTrabajoCiclos(null, null, true);
        foreach ( $prd_orden_trabajo_ciclos as $prd_orden_trabajo_ciclo )
        {
            if ( ! $prd_orden_trabajo_ciclo->getEsCicloNoIniciado() )
            {
                return false;
            }
        }
        return true;
    }
}
?>