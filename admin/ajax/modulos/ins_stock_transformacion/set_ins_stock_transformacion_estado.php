<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_stock_transformacion = InsStockTransformacion::getOxId($id);
    if($ins_stock_transformacion->getEstado() == 1){
        $ins_stock_transformacion->setEstado(0);
    }else{
        $ins_stock_transformacion->setEstado(1);
    }
    $ins_stock_transformacion->cambiarEstado();
}        
?>

