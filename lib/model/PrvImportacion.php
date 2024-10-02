<?php 
require_once "base/BPrvImportacion.php"; 
class PrvImportacion extends BPrvImportacion
{
    const CANTIDAD_DIAS_PARA_RESTABLECER = 5;

    public function getDescripcion(){
        $texto = $this->getId();
        $texto.= " - ";
        $texto.= $this->getPrvProveedor()->getDescripcion();
        $texto.= " - ";
        $texto.= Gral::getFechaHoraToWeb($this->getCreado());
        $texto.= " ";
        $texto.= "(".$this->getCantidadTab3().")";
        return $texto;
    }
    
    
   /**
    * Autor: Pablo Rosen
    * Fecha: 03/01/2017 14:50 hs.
    * Metodo que registra un nuevo estado para la importacion
    */
    public function setPrvImportacionEstado($tipo_estado_codigo, $observaciones = ''){
        $inicial = 1;
        foreach($this->getPrvImportacionEstados() as $prv_importacion_estado){
            $prv_importacion_estado->setActual(0);
            $prv_importacion_estado->save();
            
            $inicial = 0;
        }
        
        $prv_importacion_tipo_estado = PrvImportacionTipoEstado::getOxCodigo($tipo_estado_codigo);
        
        $prv_importacion_estado = new PrvImportacionEstado();
        $prv_importacion_estado->setPrvImportacionId($this->getId());
        $prv_importacion_estado->setPrvImportacionTipoEstadoId($prv_importacion_tipo_estado->getId());
        $prv_importacion_estado->setInicial($inicial);
        $prv_importacion_estado->setActual(1);
        $prv_importacion_estado->setObservacion($observaciones);
        $prv_importacion_estado->save();
        
        // actualizamos el estado en prv importacion
        $this->setPrvImportacionTipoEstadoId($prv_importacion_tipo_estado->getId());
        $this->save();
        
        return $prv_importacion_estado;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 03/01/2017 14:50 hs.
     * Metodo que retorna el estado actual de la importacion
     * @return PrvImportacionEstado
     */
    public function getPrvImportacionEstadoActual(){
        $c = new Criterio();
        $c->add(PrvImportacionEstado::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PrvImportacionEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(PrvImportacionEstado::GEN_TABLA);
        $c->setCriterios();
        
        $prv_importacion_estados = PrvImportacionEstado::getPrvImportacionEstados(null, $c);
        foreach($prv_importacion_estados as $prv_importacion_estado){
            return $prv_importacion_estado;
        }
        return false;
    }
    
    public function getPrvImportacionTipoEstadoActual(){
        $prv_importacion_estado_actual = $this->getPrvImportacionEstadoActual();
        if($prv_importacion_estado_actual){
            return $prv_importacion_estado_actual->getPrvImportacionTipoEstado();
        }
        return false;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 03/01/2017 14:50 hs.
     * Metodo que retorna el estado de un PrvImportacion de acuerdo a un codigo de PrvImportacionTipoEstado indicado
     * @return PrvImportacionEstado
     */
    public function getPrvImportacionEstadoXCodigoDePrvImportacionTipoEstado($valor){
        $c = new Criterio();
        $c->add(PrvImportacionEstado::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PrvImportacionTipoEstado::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
        $c->addTabla(PrvImportacionEstado::GEN_TABLA);
        $c->addRealJoin(PrvImportacionTipoEstado::GEN_TABLA, PrvImportacionTipoEstado::GEN_ATTR_ID, PrvImportacionEstado::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID);
        $c->setCriterios();
        
        $prv_importacion_estados = PrvImportacionEstado::getPrvImportacionEstados(null, $c);
        foreach($prv_importacion_estados as $prv_importacion_estado){
            return $prv_importacion_estado;
        }
        return false;
    }    
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 03/01/2017 14:50 hs.
     * Metodo que inicializa la importacion
     * @return PrvImportacion
     */
    public function setRegistrarImportacion(){
        
        // determinacion de valor de descuento
        
        $this->setEstado(1);
        $this->save();
        
        // se registra el estado inicial de la importacion
        $this->setPrvImportacionEstado(PrvImportacionTipoEstado::TIPO_GENERADO, $obs = 'Importacion iniciada');
        
        return $this;
    }
    
    static function getPrvImportacionsParaRestablecer(){
        
        $fecha = Date::sumarDias(date('Y-m-d'), -self::CANTIDAD_DIAS_PARA_RESTABLECER);
        
        $c = new Criterio();
        $c->add(PrvImportacion::GEN_ATTR_CREADO."::date", $fecha, Criterio::MAYORIGUAL);
        $c->add(PrvImportacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(PrvImportacionTipoEstado::GEN_ATTR_PERMITE_RESTABLECER, 1, Criterio::IGUAL);
        $c->addTabla(PrvImportacion::GEN_TABLA);
        $c->addRealJoin(PrvImportacionTipoEstado::GEN_TABLA, PrvImportacionTipoEstado::GEN_ATTR_ID, PrvImportacion::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID);
        $c->addOrden(PrvImportacion::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $p = new Paginador(10, 1);
        $p = null;
        
        $prv_importacions = PrvImportacion::getPrvImportacions($p, $c);
        
        return $prv_importacions;
    }

    static function getPrvImportacionsParaEliminarEnTmp($cantidad = 0){
        
        // ---------------------------------------------------------------------
        // importaciones que permiten restablecer, de mas de X dias
        // ---------------------------------------------------------------------
        $fecha = Date::sumarDias(date('Y-m-d'), -self::CANTIDAD_DIAS_PARA_RESTABLECER);
        
        $c = new Criterio();
        $c->add(PrvImportacion::GEN_ATTR_CREADO."::date", $fecha, Criterio::MENOR);
        $c->add(PrvImportacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(PrvImportacionTipoEstado::GEN_ATTR_PERMITE_RESTABLECER, 1, Criterio::IGUAL);
        $c->addTabla(PrvImportacion::GEN_TABLA);
        $c->addRealJoin(PrvImportacionTipoEstado::GEN_TABLA, PrvImportacionTipoEstado::GEN_ATTR_ID, PrvImportacion::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID);
        $c->addOrden(PrvImportacion::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $p = new Paginador($cantidad, 1);
        if($cantidad == 0){
            $p = null;
        }
        
        $prv_importacions_para_restablecer_obsoletas = PrvImportacion::getPrvImportacions($p, $c);
        
        // ---------------------------------------------------------------------
        // importaciones que ya no permiten restablecer
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(PrvImportacionTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(PrvImportacionTipoEstado::GEN_ATTR_PERMITE_RESTABLECER, 0, Criterio::IGUAL);
        $c->addTabla(PrvImportacion::GEN_TABLA);
        $c->addRealJoin(PrvImportacionTipoEstado::GEN_TABLA, PrvImportacionTipoEstado::GEN_ATTR_ID, PrvImportacion::GEN_ATTR_PRV_IMPORTACION_TIPO_ESTADO_ID);
        $c->addOrden(PrvImportacion::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $p = new Paginador($cantidad, 1);
        if($cantidad == 0){
            $p = null;
        }
        
        $prv_importacions_para_no_restablecer = PrvImportacion::getPrvImportacions($p, $c); 

        // ---------------------------------------------------------------------
        // se realiza un merge de las 2 colecciones
        // ---------------------------------------------------------------------        
        $prv_importacions = array_merge($prv_importacions_para_restablecer_obsoletas, $prv_importacions_para_no_restablecer);
        
        return $prv_importacions;
    }
    
    public function getPrvImportacionResultadosOrdenados(){
        $c = new Criterio();
        $c->add(PrvImportacionResultado::GEN_ATTR_PRV_IMPORTACION_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PrvImportacionResultado::GEN_TABLA);
        $c->addOrden(PrvImportacionResultado::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $p = new Paginador(1, 1);
        $p = null;
        
        $prv_importacion_resultados = PrvImportacionResultado::getPrvImportacionResultados($p, $c);
        return $prv_importacion_resultados;
    }
    
}

?>