<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_FACTURA_VTA_TRIBUTO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $vta_nota_credito_vta_factura_vta_tributo = VtaNotaCreditoVtaFacturaVtaTributo::getOxId($id);
    $vta_nota_credito_vta_factura_vta_tributo->duplicarVtaNotaCreditoVtaFacturaVtaTributo();
}    

