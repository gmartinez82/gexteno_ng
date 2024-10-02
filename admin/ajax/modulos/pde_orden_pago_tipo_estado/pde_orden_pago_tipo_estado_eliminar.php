<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_TIPO_ESTADO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_orden_pago_tipo_estado = new PdeOrdenPagoTipoEstado();
    $pde_orden_pago_tipo_estado->setId($id, false);
    $pde_orden_pago_tipo_estado->deleteAll();
}    
?>

