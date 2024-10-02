<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_TIPO_MEDIO_DIGITAL_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $cli_tipo_medio_digital = new CliTipoMedioDigital();
    $cli_tipo_medio_digital->setId($id, false);
    $cli_tipo_medio_digital->deleteAll();
}    
?>

