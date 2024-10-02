<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_RECIBO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cntb_diario_asiento_vta_recibo = CntbDiarioAsientoVtaRecibo::getOxId($id);
    if($cntb_diario_asiento_vta_recibo->getEstado() == 1){
        $cntb_diario_asiento_vta_recibo->setEstado(0);
    }else{
        $cntb_diario_asiento_vta_recibo->setEstado(1);
    }
    $cntb_diario_asiento_vta_recibo->cambiarEstado();
}        
?>

