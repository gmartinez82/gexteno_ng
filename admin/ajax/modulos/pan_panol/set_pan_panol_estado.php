<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PAN_PANOL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pan_panol = PanPanol::getOxId($id);
    if($pan_panol->getEstado() == 1){
        $pan_panol->setEstado(0);
    }else{
        $pan_panol->setEstado(1);
    }
    $pan_panol->cambiarEstado();
}        
?>

