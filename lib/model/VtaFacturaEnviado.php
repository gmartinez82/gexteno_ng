<?php

require_once "base/BVtaFacturaEnviado.php";

class VtaFacturaEnviado extends BVtaFacturaEnviado {

    const FACTURA_ENVIADO_CORRECTAMENTE = 'Enviado con exito.';

    public function setConfirmarVtaFacturaEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }

}

?>