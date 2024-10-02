<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PAN_TIPO_PANOL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pan_tipo_panol = PanTipoPanol::getOxId($id);
    if($pan_tipo_panol->getEstado() == 1){
        $pan_tipo_panol->setEstado(0);
    }else{
        $pan_tipo_panol->setEstado(1);
    }
    $pan_tipo_panol->cambiarEstado();
}        
?>

