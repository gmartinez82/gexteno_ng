<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_PDE_FACTURA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_orden_pago_pde_factura = PdeOrdenPagoPdeFactura::getOxId($id);
    if($pde_orden_pago_pde_factura->getEstado() == 1){
        $pde_orden_pago_pde_factura->setEstado(0);
    }else{
        $pde_orden_pago_pde_factura->setEstado(1);
    }
    $pde_orden_pago_pde_factura->cambiarEstado();
}        
?>

