<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_ATRIBUTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_atributo = InsAtributo::getOxId($id);
    if($ins_atributo->getEstado() == 1){
        $ins_atributo->setEstado(0);
    }else{
        $ins_atributo->setEstado(1);
    }
    $ins_atributo->cambiarEstado();
}        
?>

