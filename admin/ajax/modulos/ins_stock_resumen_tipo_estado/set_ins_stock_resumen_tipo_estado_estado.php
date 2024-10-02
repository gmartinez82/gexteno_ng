<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_TIPO_ESTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_stock_resumen_tipo_estado = InsStockResumenTipoEstado::getOxId($id);
    if($ins_stock_resumen_tipo_estado->getEstado() == 1){
        $ins_stock_resumen_tipo_estado->setEstado(0);
    }else{
        $ins_stock_resumen_tipo_estado->setEstado(1);
    }
    $ins_stock_resumen_tipo_estado->cambiarEstado();
}        
?>

