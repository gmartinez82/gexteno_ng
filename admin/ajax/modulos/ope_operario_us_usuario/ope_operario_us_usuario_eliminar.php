<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OPE_OPERARIO_US_USUARIO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $ope_operario_us_usuario = OpeOperarioUsUsuario::getOxId($id);
    if($ope_operario_us_usuario){
        if($ope_operario_us_usuario->getHash() == $hash){
            $ope_operario_us_usuario->deleteAll();
        }
    }
}    
?>

