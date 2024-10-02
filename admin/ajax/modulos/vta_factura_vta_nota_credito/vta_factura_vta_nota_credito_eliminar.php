<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_NOTA_CREDITO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_factura_vta_nota_credito = new VtaFacturaVtaNotaCredito();
    $vta_factura_vta_nota_credito->setId($id, false);
    $vta_factura_vta_nota_credito->deleteAll();
}    
?>

