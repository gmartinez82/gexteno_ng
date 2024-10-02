<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_CLIENTE_GRAL_FP_CUOTA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cli_cliente_gral_fp_cuota = CliClienteGralFpCuota::getOxId($id);
    if($cli_cliente_gral_fp_cuota->getEstado() == 1){
        $cli_cliente_gral_fp_cuota->setEstado(0);
    }else{
        $cli_cliente_gral_fp_cuota->setEstado(1);
    }
    $cli_cliente_gral_fp_cuota->cambiarEstado();
}        
?>

