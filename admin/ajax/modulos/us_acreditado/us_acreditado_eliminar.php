<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_ACREDITADO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $us_acreditado = new UsAcreditado();
    $us_acreditado->setId($id, false);
    $us_acreditado->deleteAll();
}    
?>

