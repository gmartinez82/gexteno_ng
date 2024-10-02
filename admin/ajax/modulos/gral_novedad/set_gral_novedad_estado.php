<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_novedad = GralNovedad::getOxId($id);
    if($gral_novedad->getEstado() == 1){
        $gral_novedad->setEstado(0);
    }else{
        $gral_novedad->setEstado(1);
    }
    $gral_novedad->cambiarEstado();
}        
?>

