<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_FACTURACION_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_orden_venta_estado_facturacion = new VtaOrdenVentaEstadoFacturacion();
    $vta_orden_venta_estado_facturacion->setId($id, false);
    $vta_orden_venta_estado_facturacion->deleteAll();
}    
?>

