<?php 
require_once "base/BPdeOrdenPagoEnviado.php"; 
class PdeOrdenPagoEnviado extends BPdeOrdenPagoEnviado
{
    public function setConfirmarPdeOrdenPagoEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }
}
?>