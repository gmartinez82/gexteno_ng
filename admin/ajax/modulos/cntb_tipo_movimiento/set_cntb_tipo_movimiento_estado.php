<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_TIPO_MOVIMIENTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cntb_tipo_movimiento = CntbTipoMovimiento::getOxId($id);
    if($cntb_tipo_movimiento->getEstado() == 1){
        $cntb_tipo_movimiento->setEstado(0);
    }else{
        $cntb_tipo_movimiento->setEstado(1);
    }
    $cntb_tipo_movimiento->cambiarEstado();
}        
?>

