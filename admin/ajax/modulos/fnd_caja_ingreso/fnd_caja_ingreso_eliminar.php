<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CAJA_INGRESO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $fnd_caja_ingreso = new FndCajaIngreso();
    $fnd_caja_ingreso->setId($id, false);
    $fnd_caja_ingreso->deleteAll();
}    
?>

