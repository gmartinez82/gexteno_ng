<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_MEDIO_DIGITAL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cli_medio_digital = CliMedioDigital::getOxId($id);
    if($cli_medio_digital->getEstado() == 1){
        $cli_medio_digital->setEstado(0);
    }else{
        $cli_medio_digital->setEstado(1);
    }
    $cli_medio_digital->cambiarEstado();
}        
?>

