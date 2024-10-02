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
if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_param_denominacion_tarjeta_gral_fp_medio_pago = EkuParamDenominacionTarjetaGralFpMedioPago::setInicializarRegistroSimple();
    if($eku_param_denominacion_tarjeta_gral_fp_medio_pago){
        $arr['id'] = $eku_param_denominacion_tarjeta_gral_fp_medio_pago->getId();
        $arr['hash'] = $eku_param_denominacion_tarjeta_gral_fp_medio_pago->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

