<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_nota_credito_vta_factura_vta_orden_venta = new VtaNotaCreditoVtaFacturaVtaOrdenVenta();
    $vta_nota_credito_vta_factura_vta_orden_venta->setId($id, false);
    $vta_nota_credito_vta_factura_vta_orden_venta->deleteAll();
}    
?>

