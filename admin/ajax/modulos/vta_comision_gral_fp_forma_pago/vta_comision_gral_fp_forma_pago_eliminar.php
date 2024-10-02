<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_COMISION_GRAL_FP_FORMA_PAGO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_comision_gral_fp_forma_pago = new VtaComisionGralFpFormaPago();
    $vta_comision_gral_fp_forma_pago->setId($id, false);
    $vta_comision_gral_fp_forma_pago->deleteAll();
}    
?>

