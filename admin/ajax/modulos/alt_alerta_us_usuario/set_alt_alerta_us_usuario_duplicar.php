<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ALT_ALERTA_US_USUARIO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $alt_alerta_us_usuario = AltAlertaUsUsuario::getOxId($id);
    $alt_alerta_us_usuario->duplicarAltAlertaUsUsuario();
}    

