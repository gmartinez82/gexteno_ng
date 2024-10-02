<?php 
require_once "base/BInsInsumoEnviado.php"; 
class InsInsumoEnviado extends BInsInsumoEnviado
{
    const INSUMO_ENVIADO_CORRECTAMENTE = 'Enviado con exito.';

    public function setConfirmarInsInsumoEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }
    
}
?>