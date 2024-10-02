<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_COMPRADOR_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_comprador = new VtaComprador();
    $vta_comprador->setId($id, false);
    $vta_comprador->deleteAll();
}    
?>

