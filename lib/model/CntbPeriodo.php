<?php 
require_once "base/BCntbPeriodo.php"; 
class CntbPeriodo extends BCntbPeriodo
{
    /**
     * @creado_por Esteban Martinez
     * @creado 16/01/2019
     */
    static function getCntbPeriodoInicializado($gral_empresa_id, $cntb_ejercicio_id, $gral_mes_id, $anio, $observacion = '')
    {
        $arr_cri = array(
            //array('campo' => 'gral_empresa_id'  , 'valor' => $gral_empresa_id),
            array('campo' => 'cntb_ejercicio_id', 'valor' => $cntb_ejercicio_id),
            array('campo' => 'gral_mes_id'      , 'valor' => $gral_mes_id),
            array('campo' => 'anio'             , 'valor' => $anio)
        );
        
        $cntb_periodo = CntbPeriodo::getOxArray($arr_cri);
        return $cntb_periodo;
    }
    
    
    /**
     * @creado_por Esteban Martinez
     * @creado 16/01/2019
     */
    static function setInicializarCntbPeriodo($gral_empresa_id, $cntb_ejercicio_id, $gral_mes_id, $anio, $observacion = '')
    {
        $gral_empresa   = GralEmpresa::getOxId($gral_empresa_id);
        $cntb_ejercicio = CntbEjercicio::getOxId($cntb_ejercicio_id);
        $gral_mes       = GralMes::getOxId($gral_mes_id);
        
        $array = array(
            array('campo' => 'cntb_ejercicio_id', 'valor' => $cntb_ejercicio_id),
            array('campo' => 'gral_mes_id', 'valor' => $gral_mes_id),
            array('campo' => 'anio', 'valor' => $anio),
        );

        $cntb_periodo = CntbPeriodo::getOxArray($array);
        if(!$cntb_periodo){
            $cntb_periodo = new CntbPeriodo();
        }

        $descripcion = "Proceso Contable " . $gral_empresa->getDescripcion() . " - " . $gral_mes->getDescripcion() . "/" . $anio;
        $cntb_periodo->setCntbEjercicioId($cntb_ejercicio_id);
        $cntb_periodo->setGralMesId($gral_mes_id);
        $cntb_periodo->setAnio($anio);
        $cntb_periodo->setDescripcion($descripcion);
        $cntb_periodo->setFechaInicio(date('Y-m-d'));
        $cntb_periodo->setFechaFin(date('Y-m-d'));
        $cntb_periodo->setEstado(1);
        $cntb_periodo->setObservacion($observacion);    
        $cntb_periodo->save();
        
        $vta_comprobantes = VtaComprobante::getVtaComprobantes($gral_empresa->getId(), $fecha_desde = false, $fecha_hasta = false, $gral_mes->getId(), $anio);
        //$pde_comprobantes = PdeComprobante::getPdeComprobantes($gral_empresa->getId(), $fecha_desde = false, $fecha_hasta = false, $gral_mes->getId(), $anio);
        
        foreach($vta_comprobantes as $vta_comprobante){

            //if(get_class($vta_comprobante) != 'VtaFactura') continue;
            //if(get_class($vta_comprobante) != 'VtaNotaCredito') continue;
            //if(get_class($vta_comprobante) != 'VtaNotaDebito') continue;
            //if(get_class($vta_comprobante) != 'VtaRecibo') continue;
            
            if(get_class($vta_comprobante) == 'VtaRecibo') continue;

            //Gral::prr($vta_comprobante);
            $arr_estado_control = $vta_comprobante->setRegistrarContabilidad($cntb_periodo);
            if($arr_estado_control['error'] == 0)
            {
                $cntb_diario_asiento = $arr_estado_control['cntb_diario_asiento'];
                if( $cntb_diario_asiento)
                {
                    $vta_comprobante->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
                    $vta_comprobante->save();
                }
            }
        }
        
        foreach($pde_comprobantes as $pde_comprobante){
            //if(get_class($pde_comprobante) != 'PdeFactura') continue;
            //if(get_class($pde_comprobante) != 'PdeNotaCredito') continue;
            //if(get_class($pde_comprobante) != 'PdeNotaDebito') continue;
            //if(get_class($pde_comprobante) != 'PdeRecibo') continue;

            if(get_class($pde_comprobante) == 'PdeRecibo') continue;
            
            //Gral::prr($pde_comprobante);
            $arr_estado_control = $pde_comprobante->setRegistrarContabilidad($cntb_periodo);
            if($arr_estado_control['error'] == 0)
            {
                $cntb_diario_asiento = $arr_estado_control['cntb_diario_asiento'];
                if( $cntb_diario_asiento)
                {
                    $pde_comprobante->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
                    $pde_comprobante->save();
                }
            }
        }
    }


    /**
     * @creado_por Esteban Martinez
     * @creado 04/02/2019
     */
    //public function getVtaFacturasXCntbDiarioAsiento($paginador = null, $criterio = null, $estado = null, $arr_ordens = false)
    public function getVtaFacturasXCntbDiarioAsiento()
    {
        $c = new Criterio();
        $c->add(VtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(VtaFactura::GEN_TABLA);
        $c->addRealJoin(CntbDiarioAsiento::GEN_TABLA, CntbDiarioAsiento::GEN_ATTR_ID, VtaFactura::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID);
        $c->addOrden(2);
        $c->setCriterios();

        $os = VtaFactura::getVtaFacturas($paginador, $c);
        return $os;
    }


    /**
     * @creado_por Esteban Martinez
     * @creado 05/02/2019
     */
    public function getVtaNotaCreditosXCntbDiarioAsiento()
    {
        $c = new Criterio();
        $c->add(VtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(VtaNotaCredito::GEN_TABLA);
        $c->addRealJoin(CntbDiarioAsiento::GEN_TABLA, CntbDiarioAsiento::GEN_ATTR_ID, VtaNotaCredito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID);
        $c->addOrden(2);
        $c->setCriterios();

        $os = VtaNotaCredito::getVtaNotaCreditos($paginador, $c);
        return $os;
    }


    /**
     * @creado_por Esteban Martinez
     * @creado 05/02/2019
     */
    public function getVtaNotaDebitosXCntbDiarioAsiento()
    {
        $c = new Criterio();
        $c->add(VtaNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(VtaNotaDebito::GEN_TABLA);
        $c->addRealJoin(CntbDiarioAsiento::GEN_TABLA, CntbDiarioAsiento::GEN_ATTR_ID, VtaNotaDebito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID);
        $c->addOrden(2);
        $c->setCriterios();
        
        $os = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);
        return $os;
    }


    /**
     * @creado_por Esteban Martinez
     * @creado 05/02/2019
     */
    public function getVtaRecibosXCntbDiarioAsiento()
    {
        $c = new Criterio();
        $c->add(VtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(VtaRecibo::GEN_TABLA);
        $c->addRealJoin(CntbDiarioAsiento::GEN_TABLA, CntbDiarioAsiento::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID);
        $c->addOrden(2);
        $c->setCriterios();
        
        $os = VtaRecibo::getVtaRecibos($paginador, $c);
        return $os;
    }


    /**
     * @creado_por Esteban Martinez
     * @creado 05/02/2019
     */
    public function getPdeFacturasXCntbDiarioAsiento()
    {
        $c = new Criterio();
        $c->add(PdeFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PdeFactura::GEN_TABLA);
        $c->addRealJoin(CntbDiarioAsiento::GEN_TABLA, CntbDiarioAsiento::GEN_ATTR_ID, PdeFactura::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID);
        $c->addOrden(2);
        $c->setCriterios();

        $os = PdeFactura::getPdeFacturas($paginador, $c);
        return $os;
    }


    /**
     * @creado_por Esteban Martinez
     * @creado 05/02/2019
     */
    public function getPdeNotaCreditosXCntbDiarioAsiento()
    {
        $c = new Criterio();
        $c->add(PdeNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PdeNotaCredito::GEN_TABLA);
        $c->addRealJoin(CntbDiarioAsiento::GEN_TABLA, CntbDiarioAsiento::GEN_ATTR_ID, PdeNotaCredito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID);
        $c->addOrden(2);
        $c->setCriterios();

        $os = PdeNotaCredito::getPdeNotaCreditos($paginador, $c);
        return $os;
    }
    
    
    /**
     * @creado_por Esteban Martinez
     * @creado 05/02/2019
     */
    public function getPdeNotaDebitosXCntbDiarioAsiento()
    {
        $c = new Criterio();
        $c->add(PdeNotaDebito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PdeNotaDebito::GEN_TABLA);
        $c->addRealJoin(CntbDiarioAsiento::GEN_TABLA, CntbDiarioAsiento::GEN_ATTR_ID, PdeNotaDebito::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID);
        $c->addOrden(2);
        $c->setCriterios();
        
        $os = PdeNotaDebito::getPdeNotaDebitos($paginador, $c);
        return $os;
    }
    
    
    /**
     * @creado_por Esteban Martinez
     * @creado 05/02/2019
     */
    public function getPdeRecibosXCntbDiarioAsiento()
    {
        $c = new Criterio();
        $c->add(PdeRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_PERIODO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PdeRecibo::GEN_TABLA);
        $c->addRealJoin(CntbDiarioAsiento::GEN_TABLA, CntbDiarioAsiento::GEN_ATTR_ID, PdeRecibo::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID);
        $c->addOrden(2);
        $c->setCriterios();
        
        $os = PdeRecibo::getPdeRecibos($paginador, $c);
        return $os;
    }
}
?>