<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ADM_ACCION_PUBLICADO')){
    $id = Gral::getVars(1, 'id');
    $ins_venta_ml_info = InsVentaMlInfo::getOxId($id);
    if($ins_venta_ml_info->getPublicado() == 1){
        $ins_venta_ml_info->setPublicado(0);
    }else{
        $ins_venta_ml_info->setPublicado(1);
    }
    $ins_venta_ml_info->save();
}
?>

