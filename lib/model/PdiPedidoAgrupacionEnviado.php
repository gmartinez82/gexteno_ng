<?php 
require_once "base/BPdiPedidoAgrupacionEnviado.php"; 
class PdiPedidoAgrupacionEnviado extends BPdiPedidoAgrupacionEnviado
{
    public function setConfirmarPdiPedidoAgrupacionEnviado($estado = 1, $error = '')
    {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }

}
?>