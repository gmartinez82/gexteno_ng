<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_FACTURACION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_orden_venta_estado_facturacion = VtaOrdenVentaEstadoFacturacion::getOxId($id);
    if($vta_orden_venta_estado_facturacion->getEstado() == 1){
        $vta_orden_venta_estado_facturacion->setEstado(0);
    }else{
        $vta_orden_venta_estado_facturacion->setEstado(1);
    }
    $vta_orden_venta_estado_facturacion->cambiarEstado();
}        
?>

