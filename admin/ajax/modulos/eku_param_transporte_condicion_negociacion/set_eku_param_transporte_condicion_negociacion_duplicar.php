<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_TRANSPORTE_CONDICION_NEGOCIACION_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_param_transporte_condicion_negociacion = EkuParamTransporteCondicionNegociacion::getOxId($id);
    $eku_param_transporte_condicion_negociacion->duplicarEkuParamTransporteCondicionNegociacion();
}    

