<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_GRUPO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cli_grupo = CliGrupo::getOxId($id);
    if($cli_grupo->getEstado() == 1){
        $cli_grupo->setEstado(0);
    }else{
        $cli_grupo->setEstado(1);
    }
    $cli_grupo->cambiarEstado();
}        
?>

