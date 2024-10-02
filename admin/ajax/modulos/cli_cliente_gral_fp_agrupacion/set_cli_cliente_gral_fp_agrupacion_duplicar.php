<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_CLIENTE_GRAL_FP_AGRUPACION_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $cli_cliente_gral_fp_agrupacion = CliClienteGralFpAgrupacion::getOxId($id);
    $cli_cliente_gral_fp_agrupacion->duplicarCliClienteGralFpAgrupacion();
}    

