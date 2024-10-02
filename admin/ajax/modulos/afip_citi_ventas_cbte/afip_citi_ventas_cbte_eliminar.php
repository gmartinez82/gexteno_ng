<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $afip_citi_ventas_cbte = new AfipCitiVentasCbte();
    $afip_citi_ventas_cbte->setId($id, false);
    $afip_citi_ventas_cbte->deleteAll();
}    
?>

