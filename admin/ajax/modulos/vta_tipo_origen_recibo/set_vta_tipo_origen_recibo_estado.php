<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_TIPO_ORIGEN_RECIBO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_tipo_origen_recibo = VtaTipoOrigenRecibo::getOxId($id);
    if($vta_tipo_origen_recibo->getEstado() == 1){
        $vta_tipo_origen_recibo->setEstado(0);
    }else{
        $vta_tipo_origen_recibo->setEstado(1);
    }
    $vta_tipo_origen_recibo->cambiarEstado();
}        
?>

