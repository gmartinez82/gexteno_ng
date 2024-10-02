<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_CATEGORIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cli_categoria = CliCategoria::getOxId($id);
    if($cli_categoria->getEstado() == 1){
        $cli_categoria->setEstado(0);
    }else{
        $cli_categoria->setEstado(1);
    }
    $cli_categoria->cambiarEstado();
}        
?>

