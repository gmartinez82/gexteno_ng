<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_MARCA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_marca = InsMarca::getOxId($id);
    if($ins_marca->getEstado() == 1){
        $ins_marca->setEstado(0);
    }else{
        $ins_marca->setEstado(1);
    }
    $ins_marca->cambiarEstado();
}        
?>

