<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_LISTING_TYPE_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ml_listing_type = new MlListingType();
    $ml_listing_type->setId($id, false);
    $ml_listing_type->deleteAll();
}    
?>

