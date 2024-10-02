<?php

require_once "base/BPdeOcAgrupacionEnviado.php";

class PdeOcAgrupacionEnviado extends BPdeOcAgrupacionEnviado {

    public function setConfirmarPdeOcAgrupacionEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }

}

?>