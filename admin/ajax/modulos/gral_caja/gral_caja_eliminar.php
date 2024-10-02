<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_CAJA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_caja = new GralCaja();
    $gral_caja->setId($id, false);
    $gral_caja->deleteAll();
}    
?>

