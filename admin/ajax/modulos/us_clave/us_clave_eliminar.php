<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_CLAVE_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $us_clave = new UsClave();
    $us_clave->setId($id, false);
    $us_clave->deleteAll();
}    
?>

