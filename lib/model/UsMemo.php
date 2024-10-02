<?php

require_once "base/BUsMemo.php";

class UsMemo extends BUsMemo {

    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // descripcion
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getDescripcion())) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError(505, 'Descripcion', self::GEN_ATTR_MIN_DESCRIPCION);
            } else {
                $o = self::getOxDescripcion($this->getDescripcion());
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError(140, 'Descripcion', self::GEN_ATTR_MIN_DESCRIPCION);
                }
            }
        } else {
            $error->addError(100, 'Descripcion', self::GEN_ATTR_MIN_DESCRIPCION);
        }

        // ---------------------------------------------------------------------
        // tipo estado
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getUsMemoTipoEstadoId())) {
            $error->addError(100, 'UsMemoTipoEstado', self::GEN_ATTR_MIN_US_MEMO_TIPO_ESTADO_ID);
        }

        // ---------------------------------------------------------------------
        // tipo
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getUsMemoTipoId())) {
            $error->addError(100, 'UsMemoTipo', self::GEN_ATTR_MIN_US_MEMO_TIPO_ID);
        }

        // ---------------------------------------------------------------------
        // observacion
        // ---------------------------------------------------------------------
        if (Ctrl::esVacio($this->getObservacion())) {
            $error->addError(100, 'Observacion', self::GEN_ATTR_MIN_OBSERVACION);
        }

        return $error;
    }

    /**
     * Metodo que sobreescribe el metodo de clase base
     */
    public function saveDesdeBackend() {
        $user = UsUsuario::autenticado();
        $this->setUsUsuarioId($user->getId());

        if ($this->getId() == '') {
            
        } else {
            
        }

        parent::saveDesdeBackend();
    }

    static function getUsMemosDelUsuario($us_usuario, $fecha_desde, $fecha_hasta, $us_memo_tipo_id = -1, $buscar = '', $us_memo_tipo_estado_activo = -1, $us_memo_us_usuario_id = 0) {

        if($us_memo_us_usuario_id != 0){
            $us_usuario = UsUsuario::getOxId($us_memo_us_usuario_id);
        }        
        
        $c = new Criterio();
        $c->add(UsUsuario::GEN_ATTR_ID, $us_usuario->getId(), Criterio::IGUAL);
        $c->add(UsMemo::GEN_ATTR_CREADO . '::date', $fecha_desde, Criterio::MAYORIGUAL);
        $c->add(UsMemo::GEN_ATTR_CREADO . '::date', $fecha_hasta, Criterio::MENORIGUAL);
        
        if($us_memo_tipo_id != -1){
            $c->add(UsMemo::GEN_ATTR_US_MEMO_TIPO_ID, $us_memo_tipo_id, Criterio::IGUAL);            
        }

        if($us_memo_tipo_estado_activo != -1){
            $c->add(UsMemoTipoEstado::GEN_ATTR_ACTIVO, $us_memo_tipo_estado_activo, Criterio::IGUAL);            
        }

        if($buscar != ''){
            $c->addInicioSubconsulta();
            $c->add(UsMemo::GEN_ATTR_DESCRIPCION, $buscar, Criterio::LIKE);            
            $c->add(UsMemo::GEN_ATTR_OBSERVACION, $buscar, Criterio::LIKE, false, Criterio::_OR);            
            $c->addFinSubconsulta();
        }
        
        $c->addTabla(UsMemo::GEN_TABLA);
        $c->addRealJoin(UsUsuario::GEN_TABLA, UsUsuario::GEN_ATTR_ID, UsMemo::GEN_ATTR_US_USUARIO_ID);
        $c->addRealJoin(UsMemoTipoEstado::GEN_TABLA, UsMemoTipoEstado::GEN_ATTR_ID, UsMemo::GEN_ATTR_US_MEMO_TIPO_ESTADO_ID);
        $c->addOrden(UsMemo::GEN_ATTR_CREADO, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(10, 1);

        $us_memos = UsMemo::getUsMemos($p, $c);
        return $us_memos;
    }
    
    static function setRegistrarUsMemo($us_memo_id, $descripcion, $us_memo_tipo_id, $us_memo_tipo_estado_id, $observacion){
        $us_memo = UsMemo::getOxId($us_memo_id);
        if(!$us_memo){
            $us_usuario = UsUsuario::autenticado();
            
            $us_memo = new UsMemo();
            $us_memo->setUsUsuarioId($us_usuario->getId());
        }
        
        $us_memo->setDescripcion($descripcion);
        $us_memo->setUsMemoTipoId($us_memo_tipo_id);
        $us_memo->setUsMemoTipoEstadoId($us_memo_tipo_estado_id);
        $us_memo->setObservacion($observacion);
        $us_memo->setEstado(1);
        $us_memo->save();
        
        return $us_memo;
    }

}

?>