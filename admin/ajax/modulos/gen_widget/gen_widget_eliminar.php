<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_WIDGET_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gen_widget = new GenWidget();
    $gen_widget->setId($id, false);
    $gen_widget->deleteAll();
}    
?>

