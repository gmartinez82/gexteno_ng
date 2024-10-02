<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_BANCO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_banco = GralBanco::getOxId($id);
    if($gral_banco->getEstado() == 1){
        $gral_banco->setEstado(0);
    }else{
        $gral_banco->setEstado(1);
    }
    $gral_banco->cambiarEstado();
}        
?>

