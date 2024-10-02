<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ATRIBUTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_unidad_medida_atributo = InsUnidadMedidaAtributo::getOxId($id);
    if($ins_unidad_medida_atributo->getEstado() == 1){
        $ins_unidad_medida_atributo->setEstado(0);
    }else{
        $ins_unidad_medida_atributo->setEstado(1);
    }
    $ins_unidad_medida_atributo->cambiarEstado();
}        
?>

