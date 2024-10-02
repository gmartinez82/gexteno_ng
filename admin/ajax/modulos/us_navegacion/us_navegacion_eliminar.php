<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_NAVEGACION_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $us_navegacion = new UsNavegacion();
    $us_navegacion->setId($id, false);
    $us_navegacion->deleteAll();
}    
?>

