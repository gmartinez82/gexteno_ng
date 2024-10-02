<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_RESPONSABLE_EMISION_REMITO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_param_responsable_emision_remito = EkuParamResponsableEmisionRemito::getOxId($id);
    $eku_param_responsable_emision_remito->duplicarEkuParamResponsableEmisionRemito();
}    

