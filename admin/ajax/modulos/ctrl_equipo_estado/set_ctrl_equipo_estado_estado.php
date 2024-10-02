<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ESTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ctrl_equipo_estado = CtrlEquipoEstado::getOxId($id);
    if($ctrl_equipo_estado->getEstado() == 1){
        $ctrl_equipo_estado->setEstado(0);
    }else{
        $ctrl_equipo_estado->setEstado(1);
    }
    $ctrl_equipo_estado->cambiarEstado();
}        
?>

