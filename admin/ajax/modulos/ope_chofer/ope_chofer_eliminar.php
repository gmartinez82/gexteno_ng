<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OPE_CHOFER_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ope_chofer = new OpeChofer();
    $ope_chofer->setId($id, false);
    $ope_chofer->deleteAll();
}    
?>

