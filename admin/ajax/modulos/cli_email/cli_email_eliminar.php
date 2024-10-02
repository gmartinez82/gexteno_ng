<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_EMAIL_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $cli_email = new CliEmail();
    $cli_email->setId($id, false);
    $cli_email->deleteAll();
}    
?>

