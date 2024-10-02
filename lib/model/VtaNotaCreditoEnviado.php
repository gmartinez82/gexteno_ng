<?php 
require_once "base/BVtaNotaCreditoEnviado.php"; 
class VtaNotaCreditoEnviado extends BVtaNotaCreditoEnviado
{ 
    const NOTA_CREDITO_ENVIADO_CORRECTAMENTE = 'Enviado con exito.';

    public function setConfirmarVtaNotaCreditoEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }
}
?>