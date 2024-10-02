<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_CHEQUE_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $pde_orden_pago_gral_fp_forma_pago_cheque = PdeOrdenPagoGralFpFormaPagoCheque::getOxId($id);
    $pde_orden_pago_gral_fp_forma_pago_cheque->duplicarPdeOrdenPagoGralFpFormaPagoCheque();
}    

