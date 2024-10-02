<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_CATEGORIA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $cli_categoria = new CliCategoria();
    $cli_categoria->setId($id, false);
    $cli_categoria->deleteAll();
}    
?>

