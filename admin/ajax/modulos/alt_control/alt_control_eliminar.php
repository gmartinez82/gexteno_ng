<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ALT_CONTROL_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $alt_control = new AltControl();
    $alt_control->setId($id, false);
    $alt_control->deleteAll();
}    
?>

