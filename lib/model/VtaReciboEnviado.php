<?php

require_once "base/BVtaReciboEnviado.php";

class VtaReciboEnviado extends BVtaReciboEnviado {

    const RECIBO_ENVIADO_CORRECTAMENTE = 'Enviado con exito.';

    public function setConfirmarVtaReciboEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }

}

?>