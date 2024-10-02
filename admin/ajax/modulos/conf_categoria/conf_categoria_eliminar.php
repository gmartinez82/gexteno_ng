<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CONF_CATEGORIA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $conf_categoria = new ConfCategoria();
    $conf_categoria->setId($id, false);
    $conf_categoria->deleteAll();
}    
?>

