<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_DESTINO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_stock_transformacion_destino = InsStockTransformacionDestino::getOxId($id);
    if($ins_stock_transformacion_destino->getEstado() == 1){
        $ins_stock_transformacion_destino->setEstado(0);
    }else{
        $ins_stock_transformacion_destino->setEstado(1);
    }
    $ins_stock_transformacion_destino->cambiarEstado();
}        
?>

