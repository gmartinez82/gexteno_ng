<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_tipo_factura = new VtaTipoFactura();
    $vta_tipo_factura->setId($id, false);
    $vta_tipo_factura->deleteAll();
}    
?>

