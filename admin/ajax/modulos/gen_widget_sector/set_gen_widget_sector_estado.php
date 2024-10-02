<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_WIDGET_SECTOR_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gen_widget_sector = GenWidgetSector::getOxId($id);
    if($gen_widget_sector->getEstado() == 1){
        $gen_widget_sector->setEstado(0);
    }else{
        $gen_widget_sector->setEstado(1);
    }
    $gen_widget_sector->cambiarEstado();
}        
?>

