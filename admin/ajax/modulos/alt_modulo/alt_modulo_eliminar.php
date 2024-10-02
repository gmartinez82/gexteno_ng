<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ALT_MODULO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $alt_modulo = new AltModulo();
    $alt_modulo->setId($id, false);
    $alt_modulo->deleteAll();
}    
?>

