<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_TIPO_MEDIO_DIGITAL_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $cli_tipo_medio_digital = CliTipoMedioDigital::getOxId($id);
    $cli_tipo_medio_digital->duplicarCliTipoMedioDigital();
}    

