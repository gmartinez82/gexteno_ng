<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_IMPORTACIONES_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $afip_citi_compras_importaciones = new AfipCitiComprasImportaciones();
    $afip_citi_compras_importaciones->setId($id, false);
    $afip_citi_compras_importaciones->deleteAll();
}    
?>

