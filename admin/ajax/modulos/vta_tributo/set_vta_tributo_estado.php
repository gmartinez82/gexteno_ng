<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_tributo = VtaTributo::getOxId($id);
    if($vta_tributo->getEstado() == 1){
        $vta_tributo->setEstado(0);
    }else{
        $vta_tributo->setEstado(1);
    }
    $vta_tributo->cambiarEstado();
}        
?>

