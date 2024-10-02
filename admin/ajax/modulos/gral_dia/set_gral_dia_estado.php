<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_DIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_dia = GralDia::getOxId($id);
    if($gral_dia->getEstado() == 1){
        $gral_dia->setEstado(0);
    }else{
        $gral_dia->setEstado(1);
    }
    $gral_dia->cambiarEstado();
}        
?>

