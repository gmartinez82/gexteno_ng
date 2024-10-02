<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_VTA_PRESUPUESTO_TIPO_VENTA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_punto_venta_vta_presupuesto_tipo_venta = new VtaPuntoVentaVtaPresupuestoTipoVenta();
    $vta_punto_venta_vta_presupuesto_tipo_venta->setId($id, false);
    $vta_punto_venta_vta_presupuesto_tipo_venta->deleteAll();
}    
?>

