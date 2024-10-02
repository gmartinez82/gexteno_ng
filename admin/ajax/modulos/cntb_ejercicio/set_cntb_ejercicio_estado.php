<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_EJERCICIO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cntb_ejercicio = CntbEjercicio::getOxId($id);
    if($cntb_ejercicio->getEstado() == 1){
        $cntb_ejercicio->setEstado(0);
    }else{
        $cntb_ejercicio->setEstado(1);
    }
    $cntb_ejercicio->cambiarEstado();
}        
?>

