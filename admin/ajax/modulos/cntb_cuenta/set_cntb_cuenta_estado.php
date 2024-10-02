<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_CUENTA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cntb_cuenta = CntbCuenta::getOxId($id);
    if($cntb_cuenta->getEstado() == 1){
        $cntb_cuenta->setEstado(0);
    }else{
        $cntb_cuenta->setEstado(1);
    }
    $cntb_cuenta->cambiarEstado();
}        
?>

