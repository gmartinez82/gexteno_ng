<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ctrl_equipo = CtrlEquipo::getOxId($id);
    if($ctrl_equipo->getEstado() == 1){
        $ctrl_equipo->setEstado(0);
    }else{
        $ctrl_equipo->setEstado(1);
    }
    $ctrl_equipo->cambiarEstado();
}        
?>

