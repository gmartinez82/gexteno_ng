<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CAJERO_GRAL_CAJA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $fnd_cajero_gral_caja = new FndCajeroGralCaja();
    $fnd_cajero_gral_caja->setId($id, false);
    $fnd_cajero_gral_caja->deleteAll();
}    
?>

