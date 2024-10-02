<?php 
require_once "base/BVtaComisionEnviado.php"; 
class VtaComisionEnviado extends BVtaComisionEnviado
{
    public function setConfirmarVtaComisionEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }
}
?>