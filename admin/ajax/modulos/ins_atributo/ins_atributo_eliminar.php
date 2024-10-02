<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_ATRIBUTO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ins_atributo = new InsAtributo();
    $ins_atributo->setId($id, false);
    $ins_atributo->deleteAll();
}    
?>

