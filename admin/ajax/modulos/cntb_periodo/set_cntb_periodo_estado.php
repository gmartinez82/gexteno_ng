<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_PERIODO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cntb_periodo = CntbPeriodo::getOxId($id);
    if($cntb_periodo->getEstado() == 1){
        $cntb_periodo->setEstado(0);
    }else{
        $cntb_periodo->setEstado(1);
    }
    $cntb_periodo->cambiarEstado();
}        
?>

