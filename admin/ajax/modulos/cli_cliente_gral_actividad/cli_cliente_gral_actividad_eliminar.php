<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_CLIENTE_GRAL_ACTIVIDAD_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $cli_cliente_gral_actividad = new CliClienteGralActividad();
    $cli_cliente_gral_actividad->setId($id, false);
    $cli_cliente_gral_actividad->deleteAll();
}    
?>

