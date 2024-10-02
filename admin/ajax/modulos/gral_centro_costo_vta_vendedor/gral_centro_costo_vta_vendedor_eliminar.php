<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_VTA_VENDEDOR_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_centro_costo_vta_vendedor = new GralCentroCostoVtaVendedor();
    $gral_centro_costo_vta_vendedor->setId($id, false);
    $gral_centro_costo_vta_vendedor->deleteAll();
}    
?>

