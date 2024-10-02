<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MOTIVO_EXTENDIDO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $gral_novedad_motivo_extendido = GralNovedadMotivoExtendido::getOxId($id);
    if($gral_novedad_motivo_extendido){
        if($gral_novedad_motivo_extendido->getHash() == $hash){
            $gral_novedad_motivo_extendido->deleteAll();
        }
    }
}    
?>

