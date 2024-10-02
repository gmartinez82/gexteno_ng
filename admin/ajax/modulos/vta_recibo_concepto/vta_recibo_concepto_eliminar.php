<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_RECIBO_CONCEPTO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_recibo_concepto = new VtaReciboConcepto();
    $vta_recibo_concepto->setId($id, false);
    $vta_recibo_concepto->deleteAll();
}    
?>

