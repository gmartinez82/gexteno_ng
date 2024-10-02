<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se realizan los controles de datos
// -----------------------------------------------------------------------------
$arr['error'] = false;

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONDICION_OPERACION_GRAL_FP_FORMA_PAGO_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_param_tipo_condicion_operacion_gral_fp_forma_pago = EkuParamTipoCondicionOperacionGralFpFormaPago::setInicializarRegistroSimple();
    if($eku_param_tipo_condicion_operacion_gral_fp_forma_pago){
        $arr['id'] = $eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getId();
        $arr['hash'] = $eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

