<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_FERIADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_feriado = GralFeriado::getOxId($id);
    if($gral_feriado->getEstado() == 1){
        $gral_feriado->setEstado(0);
    }else{
        $gral_feriado->setEstado(1);
    }
    $gral_feriado->cambiarEstado();
}        
?>

