<?php 
require_once "base/BPdeOcEnviado.php"; 
class PdeOcEnviado extends BPdeOcEnviado
{
    public function setConfirmarPdeOcEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }    
}
?>