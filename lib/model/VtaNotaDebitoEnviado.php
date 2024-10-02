<?php

require_once "base/BVtaNotaDebitoEnviado.php";

class VtaNotaDebitoEnviado extends BVtaNotaDebitoEnviado {

    const NOTA_DEBITO_ENVIADO_CORRECTAMENTE = 'Enviado con exito.';

    public function setConfirmarVtaNotaDebitoEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }

}

?>