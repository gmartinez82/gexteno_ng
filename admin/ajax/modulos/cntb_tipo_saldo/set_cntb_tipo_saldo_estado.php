<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_TIPO_SALDO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cntb_tipo_saldo = CntbTipoSaldo::getOxId($id);
    if($cntb_tipo_saldo->getEstado() == 1){
        $cntb_tipo_saldo->setEstado(0);
    }else{
        $cntb_tipo_saldo->setEstado(1);
    }
    $cntb_tipo_saldo->cambiarEstado();
}        
?>

