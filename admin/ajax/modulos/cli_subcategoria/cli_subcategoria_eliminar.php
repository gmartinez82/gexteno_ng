<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $cli_subcategoria = new CliSubcategoria();
    $cli_subcategoria->setId($id, false);
    $cli_subcategoria->deleteAll();
}    
?>

