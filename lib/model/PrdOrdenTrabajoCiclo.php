<?php 
require_once "base/BPrdOrdenTrabajoCiclo.php"; 
class PrdOrdenTrabajoCiclo extends BPrdOrdenTrabajoCiclo
{
    public function getDescripcion()
    {
        $descripcion = 'OT Ciclo #' . $this->getNumero();
        return $descripcion;
    }
    
    
    /**
     * Obtiene las operaciones iniciadas (las que son distintas a NO INICIADA)
     * 
     * @return array $prd_orden_trabajo_operacions_iniciadas
     */
    public function getPrdOrdenTrabajoOperacionesIniciadas()
    {
        $c = new Criterio();
        $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
        $c->addRealJoin(PrdOrdenTrabajoCiclo::GEN_TABLA, PrdOrdenTrabajoCiclo::GEN_ATTR_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID);
        $c->addRealJoin(PrdOrdenTrabajoOperacionTipoEstado::GEN_TABLA, PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID);
        $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_CODIGO, PrdOrdenTrabajoOperacionTipoEstado::TIPO_NO_INICIADA, Criterio::DISTINTO);
        $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addOrden(PrdOrdenTrabajoOperacion::GEN_ATTR_NUMERO, Criterio::_DESC);
        $c->setCriterios();
        $prd_orden_trabajo_operacions_iniciadas = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions(null, $c);
        return $prd_orden_trabajo_operacions_iniciadas;
    }
    
    
    /**
     * Obtiene las operaciones NO iniciadas
     * 
     * @return array $prd_orden_trabajo_operacions_no_iniciadas
     */
    public function getPrdOrdenTrabajoOperacionesNoIniciadas()
    {
        $c = new Criterio();
        $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
        $c->addRealJoin(PrdOrdenTrabajoCiclo::GEN_TABLA, PrdOrdenTrabajoCiclo::GEN_ATTR_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID);
        $c->addRealJoin(PrdOrdenTrabajoOperacionTipoEstado::GEN_TABLA, PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID);
        $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_CODIGO, PrdOrdenTrabajoOperacionTipoEstado::TIPO_NO_INICIADA, Criterio::IGUAL);
        $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addOrden(PrdOrdenTrabajoOperacion::GEN_ATTR_NUMERO, Criterio::_DESC);
        $c->setCriterios();
        $prd_orden_trabajo_operacions_no_iniciadas = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions(null, $c);
        return $prd_orden_trabajo_operacions_no_iniciadas;
    }
    
    
    /**
     * Obtiene las operaciones en curso
     * 
     * @return array $prd_orden_trabajo_operacions_en_cursos
     */
    public function getPrdOrdenTrabajoOperacionesEnCursos()
    {
        $c = new Criterio();
        $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
        $c->addRealJoin(PrdOrdenTrabajoCiclo::GEN_TABLA, PrdOrdenTrabajoCiclo::GEN_ATTR_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID);
        $c->addRealJoin(PrdOrdenTrabajoOperacionTipoEstado::GEN_TABLA, PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID);
        $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_CODIGO, PrdOrdenTrabajoOperacionTipoEstado::TIPO_EN_CURSO, Criterio::IGUAL);
        $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addOrden(PrdOrdenTrabajoOperacion::GEN_ATTR_NUMERO, Criterio::_DESC);
        $c->setCriterios();
        $prd_orden_trabajo_operacions_en_cursos = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions(null, $c);
        return $prd_orden_trabajo_operacions_en_cursos;
    }
    
    
    /**
     * Obtiene las operaciones finalizadas
     * 
     * @return array $prd_orden_trabajo_operacions_finalizados
     */
    public function getPrdOperacionesFinalizadas()
    {
        //return 6;
        $c = new Criterio();
        $c->addTabla(PrdOrdenTrabajoOperacion::GEN_TABLA);
        $c->addRealJoin(PrdOrdenTrabajoCiclo::GEN_TABLA, PrdOrdenTrabajoCiclo::GEN_ATTR_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID);
        $c->addRealJoin(PrdOrdenTrabajoOperacionTipoEstado::GEN_TABLA, PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_ID, PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO_ID);
        $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_PRD_ORDEN_TRABAJO_CICLO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PrdOrdenTrabajoOperacionTipoEstado::GEN_ATTR_TERMINAL, 1, Criterio::IGUAL);
        $c->add(PrdOrdenTrabajoOperacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addOrden(PrdOrdenTrabajoOperacion::GEN_ATTR_NUMERO, Criterio::_DESC);
        $c->setCriterios();
        $prd_orden_trabajo_operacions_finalizados = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacions(null, $c);
        return $prd_orden_trabajo_operacions_finalizados;
    }
    
    
    /**
     * Obtiene la cantidad de operaciones del ciclo
     * 
     * @return integer $cantidad_operaciones;
     */
    public function getCantidadOperaciones()
    {
        $cantidad_operaciones = count($this->getPrdOrdenTrabajoOperacions(null, null, true));
        return $cantidad_operaciones;
    }
    
    
    /**
     * Obtiene la cantidad de operaciones inciadas del ciclo (las que son distintas a NO INICIADA)
     * 
     * @return integer $cantidad_operaciones_finalizadas;
     */
    public function getCantidadOperacionesIniciadas()
    {
        $cantidad_operaciones_iniciadas = count($this->getPrdOrdenTrabajoOperacionesIniciadas());
        
        return $cantidad_operaciones_iniciadas;
    }
    
    
    /**
     * Obtiene la cantidad de operaciones no inciadas del ciclo 
     * 
     * @return integer $cantidad_operaciones_no_iniciadas;
     */
    public function getCantidadOperacionesNoIniciadas()
    {
        $cantidad_operaciones_no_iniciadas = count($this->getPrdOrdenTrabajoOperacionesNoIniciadas());
        return $cantidad_operaciones_no_iniciadas;
    }
    
    
    /**
     * Obtiene la cantidad de operaciones en curso del ciclo 
     * 
     * @return integer $cantidad_operaciones_en_cursos;
     */
    public function getCantidadOperacionesEnCursos()
    {
        $cantidad_operaciones_en_cursos = count($this->getPrdOrdenTrabajoOperacionesEnCursos());
        return $cantidad_operaciones_en_cursos;
    }
    
    
    /**
     * Obtiene la cantidad de operaciones finalizadas del ciclo
     * 
     * @return integer $cantidad_operaciones_finalizadas;
     */
    public function getCantidadOperacionesFinalizadas()
    {
        $cantidad_operaciones_finalizadas = count($this->getPrdOperacionesFinalizadas());
        return $cantidad_operaciones_finalizadas;
    }
    
    
    /**
     * Determina si el ciclo esta finalizado
     * 
     * @return boolean
     */
    public function getEsCicloFinalizado()
    {
        $cantidad_operacion = $this->getCantidadOperaciones();
        $cantidad_operacion_finalizadas = $this->getCantidadOperacionesFinalizadas();
        if ( ( $cantidad_operacion_finalizadas > 0 ) && ( $cantidad_operacion == $cantidad_operacion_finalizadas ) )
        {
            return true;
        }
        return false;
    }
    
    
    /**
     * Determina si el ciclo esta iniciado
     * 
     * @return boolean
     */
    public function getEsCicloIniciado()
    {
        $cantidad_operacion = $this->getCantidadOperaciones();
        $cantidad_operacion_iniciados = $this->getCantidadOperacionesIniciadas();
        if ( $cantidad_operacion == $cantidad_operacion_iniciados && $cantidad_operacion_iniciados > 0 )
        {
            return true;
        }
        return false;
    }
    
    
    /**
     * Determina si el ciclo esta no iniciado
     * 
     * @return boolean
     */
    public function getEsCicloNoIniciado()
    {
        $cantidad_operacion = $this->getCantidadOperaciones();
        $cantidad_operacion_no_iniciados = $this->getCantidadOperacionesNoIniciadas();
        if ( $cantidad_operacion == $cantidad_operacion_no_iniciados )
        {
            return true;
        }
        return false;
    }
}
?>