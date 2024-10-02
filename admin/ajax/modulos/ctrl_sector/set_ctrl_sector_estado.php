<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CTRL_SECTOR_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ctrl_sector = CtrlSector::getOxId($id);
    if($ctrl_sector->getEstado() == 1){
        $ctrl_sector->setEstado(0);
    }else{
        $ctrl_sector->setEstado(1);
    }
    $ctrl_sector->cambiarEstado();
}        
?>

