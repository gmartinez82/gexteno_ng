<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_RECIBO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_factura_vta_recibo = VtaFacturaVtaRecibo::getOxId($id);
    if($vta_factura_vta_recibo->getEstado() == 1){
        $vta_factura_vta_recibo->setEstado(0);
    }else{
        $vta_factura_vta_recibo->setEstado(1);
    }
    $vta_factura_vta_recibo->cambiarEstado();
}        
?>

