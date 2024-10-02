<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_tipo_factura = VtaTipoFactura::getOxId($id);
    if($vta_tipo_factura->getEstado() == 1){
        $vta_tipo_factura->setEstado(0);
    }else{
        $vta_tipo_factura->setEstado(1);
    }
    $vta_tipo_factura->cambiarEstado();
}        
?>

