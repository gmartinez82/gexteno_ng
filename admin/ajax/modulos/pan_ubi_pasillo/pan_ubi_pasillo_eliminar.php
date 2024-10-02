<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PAN_UBI_PASILLO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pan_ubi_pasillo = new PanUbiPasillo();
    $pan_ubi_pasillo->setId($id, false);
    $pan_ubi_pasillo->deleteAll();
}    
?>

