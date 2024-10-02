<?php

require_once "base/BVtaRemitoEnviado.php";

class VtaRemitoEnviado extends BVtaRemitoEnviado {

    const REMITO_ENVIADO_CORRECTAMENTE = 'Enviado con exito.';

    public function setConfirmarVtaRemitoEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }

}

?>