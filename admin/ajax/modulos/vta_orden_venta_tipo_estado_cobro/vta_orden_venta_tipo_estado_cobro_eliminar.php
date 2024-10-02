<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_COBRO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_orden_venta_tipo_estado_cobro = new VtaOrdenVentaTipoEstadoCobro();
    $vta_orden_venta_tipo_estado_cobro->setId($id, false);
    $vta_orden_venta_tipo_estado_cobro->deleteAll();
}    
?>

