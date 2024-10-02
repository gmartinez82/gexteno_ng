<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_FACTURA_ENVIADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_factura_enviado = VtaFacturaEnviado::getOxId($id);
    if($vta_factura_enviado->getEstado() == 1){
        $vta_factura_enviado->setEstado(0);
    }else{
        $vta_factura_enviado->setEstado(1);
    }
    $vta_factura_enviado->cambiarEstado();
}        
?>

