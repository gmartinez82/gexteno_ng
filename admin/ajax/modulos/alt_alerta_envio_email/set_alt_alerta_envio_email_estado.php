<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ALT_ALERTA_ENVIO_EMAIL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $alt_alerta_envio_email = AltAlertaEnvioEmail::getOxId($id);
    if($alt_alerta_envio_email->getEstado() == 1){
        $alt_alerta_envio_email->setEstado(0);
    }else{
        $alt_alerta_envio_email->setEstado(1);
    }
    $alt_alerta_envio_email->cambiarEstado();
}        
?>

