<?php 
require_once "base/BGenPrcaEjecucion.php"; 
class GenPrcaEjecucion extends BGenPrcaEjecucion
{
    /**
     * [setInicializarPrcaEjecucion inicializa una ejecucion]
     * @param [object] $gen_api_proyecto [description]
     * @param [object] $gen_prca_proceso  [description]
     * @return [object] $gen_prca_ejecucion [description]
     */
    static function setInicializarPrcaEjecucion($gen_api_proyecto, $gen_prca_proceso)
    {
        if($gen_api_proyecto && $gen_prca_proceso)
        {
            $gen_prca_ejecucion = new self();
            $descripcion = 'Ejecucion de '.$gen_prca_proceso->getDescripcion().' iniciado a las '.date('Y-m-d H:i:s');
            $gen_prca_ejecucion->setDescripcion($descripcion);
            $gen_prca_ejecucion->setGenApiProyectoId($gen_api_proyecto->getId());
            $gen_prca_ejecucion->setGenPrcaProcesoId($gen_prca_proceso->getId());
            $gen_prca_ejecucion->setFechahoraInicio(date('Y-m-d H:i:s'));
            $gen_prca_ejecucion->setFechahoraFin('1900-01-01');
            $gen_prca_ejecucion->setCodigo();
            $gen_prca_ejecucion->setIniciado(1);
            $gen_prca_ejecucion->setFinalizado(0);
            $gen_prca_ejecucion->setIdRemoto(0);
            $gen_prca_ejecucion->setConfirmado(0);
            $gen_prca_ejecucion->setEstado(1);
            $gen_prca_ejecucion->save();
            
            $codigo = $gen_api_proyecto->getCodigo().'_'.$gen_prca_proceso->getCodigo().'_EJECUCION_'.$gen_prca_ejecucion->getId();
            $gen_prca_ejecucion->setCodigo($codigo);
            $gen_prca_ejecucion->save();
            return $gen_prca_ejecucion;
        }
        return false;
    }
    
    
    /**
     * [setFinalizarPrcaEjecucion Finaliza una ejecucion]
     * @return [object] $gen_prca_ejecucion [description]
     */
    public function setFinalizarPrcaEjecucion()
    {
        $this->setFechahoraFin(date('Y-m-d H:i:s'));
        $this->setFinalizado(1);
        $this->setEstado(1);
        $this->save();
        return $this;
    }
    
    
    /**
     * [setInicializarPrcaEjecucionDetalle Inicializa una ejecucion detalle]
     * @param string $descripcion [description]
     * @return [object] $gen_prca_ejecucion_detalle [description]
     */
    public function setInicializarPrcaEjecucionDetalle($descripcion = '')
    {
        $gen_prca_ejecucion_detalle = new GenPrcaEjecucionDetalle();
        
        $gen_prca_ejecucion_detalle->setDescripcion($descripcion);
        $gen_prca_ejecucion_detalle->setGenApiProyectoId($this->getGenApiProyectoId());
        $gen_prca_ejecucion_detalle->setGenPrcaProcesoId($this->getGenPrcaProcesoId());
        $gen_prca_ejecucion_detalle->setGenPrcaEjecucionId($this->getId());
        $gen_prca_ejecucion_detalle->setFechahoraInicio(date('Y-m-d H:i:s'));
        $gen_prca_ejecucion_detalle->setFechahoraFin('1900-01-01');
        $gen_prca_ejecucion_detalle->setIniciado(1);
        $gen_prca_ejecucion_detalle->setFinalizado(0);
        $gen_prca_ejecucion_detalle->setIdRemoto(0);
        $gen_prca_ejecucion_detalle->setConfirmado(0);
        $gen_prca_ejecucion_detalle->setEstado(1);
        $gen_prca_ejecucion_detalle->save();
        
        $codigo = $this->getCodigo().'_DETALLE_'.$gen_prca_ejecucion_detalle->getId();
        $gen_prca_ejecucion_detalle->setCodigo($codigo);
        $gen_prca_ejecucion_detalle->save();
        
        return $gen_prca_ejecucion_detalle;
    }
    
    
    /**
     * [setFinalizarPrcaEjecucionDetalle Finaliza un detalle de ejecucion]
     * @param [object] $gen_prca_ejecucion_detalle [description]
     * @return [object] $gen_prca_ejecucion_detalle [description]
     */
    public function setFinalizarPrcaEjecucionDetalle($gen_prca_ejecucion_detalle)
    {
        if($gen_prca_ejecucion_detalle)
        {
            $gen_prca_ejecucion_detalle->setFechahoraFin(date('Y-m-d H:i:s'));
            $gen_prca_ejecucion_detalle->setFinalizado(1);
            $gen_prca_ejecucion_detalle->setEstado(1);
            $gen_prca_ejecucion_detalle->save();
            return $gen_prca_ejecucion_detalle;
        }
    }
    
    
    /**
     * [getGenPrcaEjecucionsNoSincronizado Obtiene los registros de ejecucion que no han sido sincronizados aun]
     * @param  integer $cantidad [description]
     * @param  integer $pagina   [description]
     * @return [collection] $gen_prca_ejecucions [description]
     */
    static function getGenPrcaEjecucionsNoSincronizado($cantidad = 10, $pagina = 1)
    {
        $c = new Criterio();
        $c->add(self::GEN_ATTR_ID_REMOTO, 0, Criterio::IGUAL);
        $c->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(self::GEN_TABLA);
        $c->addOrden(self::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $p = new Paginador($cantidad, $pagina);
        
        $gen_prca_ejecucions = self::getGenPrcaEjecucions($p, $c);
        
        return $gen_prca_ejecucions;
    }
}
?>