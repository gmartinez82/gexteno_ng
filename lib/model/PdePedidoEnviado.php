<?php 
require_once "base/BPdePedidoEnviado.php"; 
class PdePedidoEnviado extends BPdePedidoEnviado
{
    public function setConfirmarPdePedidoEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }   
}
?>