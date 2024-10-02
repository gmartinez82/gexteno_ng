<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_oc_agrupacion_item = new PdeOcAgrupacionItem();
    $pde_oc_agrupacion_item->setId($id, false);
    $pde_oc_agrupacion_item->deleteAll();
}    
?>

