<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cli_subcategoria = CliSubcategoria::getOxId($id);
    if($cli_subcategoria->getEstado() == 1){
        $cli_subcategoria->setEstado(0);
    }else{
        $cli_subcategoria->setEstado(1);
    }
    $cli_subcategoria->cambiarEstado();
}        
?>

