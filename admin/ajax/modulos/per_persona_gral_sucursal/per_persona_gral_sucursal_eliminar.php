<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $per_persona_gral_sucursal = PerPersonaGralSucursal::getOxId($id);
    if($per_persona_gral_sucursal){
        if($per_persona_gral_sucursal->getHash() == $hash){
            $per_persona_gral_sucursal->deleteAll();
        }
    }
}    
?>

