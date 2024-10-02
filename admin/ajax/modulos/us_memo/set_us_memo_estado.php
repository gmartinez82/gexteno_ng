<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_MEMO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $us_memo = UsMemo::getOxId($id);
    if($us_memo->getEstado() == 1){
        $us_memo->setEstado(0);
    }else{
        $us_memo->setEstado(1);
    }
    $us_memo->cambiarEstado();
}        
?>

