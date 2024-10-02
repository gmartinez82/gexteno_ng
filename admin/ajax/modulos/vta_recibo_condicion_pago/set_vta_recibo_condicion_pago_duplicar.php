<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_RECIBO_CONDICION_PAGO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $vta_recibo_condicion_pago = VtaReciboCondicionPago::getOxId($id);
    $vta_recibo_condicion_pago->duplicarVtaReciboCondicionPago();
}    

