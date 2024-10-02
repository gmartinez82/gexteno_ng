<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $per_persona_gral_sucursal = PerPersonaGralSucursal::getOxId($id);
    if($per_persona_gral_sucursal->getEstado() == 1){
        $per_persona_gral_sucursal->setEstado(0);
    }else{
        $per_persona_gral_sucursal->setEstado(1);
    }
    $per_persona_gral_sucursal->cambiarEstado();
}        
?>

