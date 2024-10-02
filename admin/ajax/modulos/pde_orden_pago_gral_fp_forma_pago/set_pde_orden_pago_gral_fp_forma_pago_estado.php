<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_orden_pago_gral_fp_forma_pago = PdeOrdenPagoGralFpFormaPago::getOxId($id);
    if($pde_orden_pago_gral_fp_forma_pago->getEstado() == 1){
        $pde_orden_pago_gral_fp_forma_pago->setEstado(0);
    }else{
        $pde_orden_pago_gral_fp_forma_pago->setEstado(1);
    }
    $pde_orden_pago_gral_fp_forma_pago->cambiarEstado();
}        
?>

