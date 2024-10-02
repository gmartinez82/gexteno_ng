<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_WIDGET_SECTOR_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gen_widget_sector = new GenWidgetSector();
    $gen_widget_sector->setId($id, false);
    $gen_widget_sector->deleteAll();
}    
?>

