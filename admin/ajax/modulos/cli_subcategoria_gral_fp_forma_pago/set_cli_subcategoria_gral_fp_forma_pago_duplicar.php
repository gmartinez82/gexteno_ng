<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_GRAL_FP_FORMA_PAGO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $cli_subcategoria_gral_fp_forma_pago = CliSubcategoriaGralFpFormaPago::getOxId($id);
    $cli_subcategoria_gral_fp_forma_pago->duplicarCliSubcategoriaGralFpFormaPago();
}    

