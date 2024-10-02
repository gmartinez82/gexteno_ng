<?php

require_once "base/BUsUsuarioAuditoria.php";

class UsUsuarioAuditoria extends BUsUsuarioAuditoria {

    const GEN_AUDITORIA_GENERAL = false;
    const ACCION_INSERT = 'INSERT';
    const ACCION_UPDATE = 'UPDATE';
    const ACCION_DELETE = 'DELETE';
    const ACCION_UPDATE_ESTADO = 'UPDATE_ESTADO';

    /**
     * Se inicia registro de auditoria
     */
    static function setRegistrarAuditoria($tabla, $clase, $o, $accion, $comando, $o_before = false) {

        if (!self::GEN_AUDITORIA_GENERAL) {
            // -----------------------------------------------------------------
            // se omite registro cuando esta inhabilitada la auditoria
            // -----------------------------------------------------------------
            return false;
        }

        if ($tabla == self::GEN_TABLA) {
            // -----------------------------------------------------------------
            // se omite registro cuando es la tabla propia, 
            // para evitar un bucle inifinto
            // -----------------------------------------------------------------
            return false;
        }

        if (!$clase::GEN_CLASE_AUDITORIA) {
            // -----------------------------------------------------------------
            // se omite registro cuando la clase no lo autoriza
            // -----------------------------------------------------------------
            return false;
        }

        if ($clase::GEN_CLASE_AUDITORIA_OBJ_BEFORE) {
            $o_before = $clase::getOxId($o->getId());
            //Gral::prr($o_before);
        }

        $us_usuario = UsUsuario::autenticado();
        $pagina = array_pop(explode('/', $_SERVER['PHP_SELF']));

        $us_usuario_auditoria = new UsUsuarioAuditoria();
        if ($us_usuario) {
            $us_usuario_auditoria->setUsUsuarioId($us_usuario->getId());
        }
        $us_usuario_auditoria->setTabla($tabla);
        $us_usuario_auditoria->setAccion($accion);
        $us_usuario_auditoria->setComando(str_replace("'", '"', $comando));
        $us_usuario_auditoria->setPagina($pagina);
        if ($o_before) {
            $us_usuario_auditoria->setDatoBefore(print_r($o_before, true));
        }
        $us_usuario_auditoria->setEstado(0);
        $us_usuario_auditoria->save();

        return $us_usuario_auditoria;
    }

    /**
     * Se confirma la ejecucion
     */
    public function setConfirmarAuditoria($clase, $o) {
        if ($clase::GEN_CLASE_AUDITORIA_OBJ_AFTER) {
            $this->setDatoAfter(print_r($o, true));
        }
        $this->setEstado(1);
        $this->save();
    }

    static function setAplicarFiltrosDeAlcance($criterio) {
        $criterio->addDistinct(false);

        // personalizar codigo para determinar el alcance 
        // de un usuario a nivel de registros

        return $criterio;
    }
    

}

?>