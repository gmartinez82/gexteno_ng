<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ATRIBUTO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ins_unidad_medida_atributo = new InsUnidadMedidaAtributo();
    $ins_unidad_medida_atributo->setId($id, false);
    $ins_unidad_medida_atributo->deleteAll();
}    
?>

