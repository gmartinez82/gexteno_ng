<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_sucursal = new GralSucursal();
    $gral_sucursal->setId($id, false);
    $gral_sucursal->deleteAll();
}    
?>

