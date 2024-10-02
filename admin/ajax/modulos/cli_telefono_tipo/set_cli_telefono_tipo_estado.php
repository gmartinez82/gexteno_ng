<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_TELEFONO_TIPO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cli_telefono_tipo = CliTelefonoTipo::getOxId($id);
    if($cli_telefono_tipo->getEstado() == 1){
        $cli_telefono_tipo->setEstado(0);
    }else{
        $cli_telefono_tipo->setEstado(1);
    }
    $cli_telefono_tipo->cambiarEstado();
}        
?>

