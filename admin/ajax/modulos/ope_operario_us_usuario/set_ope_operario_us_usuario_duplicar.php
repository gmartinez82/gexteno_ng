<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OPE_OPERARIO_US_USUARIO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $ope_operario_us_usuario = OpeOperarioUsUsuario::getOxId($id);
    $ope_operario_us_usuario->duplicarOpeOperarioUsUsuario();
}    

