<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_RECIBO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_condicion_iva_vta_tipo_recibo = new GralCondicionIvaVtaTipoRecibo();
    $gral_condicion_iva_vta_tipo_recibo->setId($id, false);
    $gral_condicion_iva_vta_tipo_recibo->deleteAll();
}    
?>

