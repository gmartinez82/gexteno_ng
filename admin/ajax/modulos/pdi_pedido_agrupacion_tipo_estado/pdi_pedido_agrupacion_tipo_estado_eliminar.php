<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pdi_pedido_agrupacion_tipo_estado = new PdiPedidoAgrupacionTipoEstado();
    $pdi_pedido_agrupacion_tipo_estado->setId($id, false);
    $pdi_pedido_agrupacion_tipo_estado->deleteAll();
}    
?>

