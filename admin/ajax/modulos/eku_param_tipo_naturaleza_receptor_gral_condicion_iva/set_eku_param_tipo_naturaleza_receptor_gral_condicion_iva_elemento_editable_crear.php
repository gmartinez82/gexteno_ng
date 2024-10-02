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
if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_param_tipo_naturaleza_receptor_gral_condicion_iva = EkuParamTipoNaturalezaReceptorGralCondicionIva::setInicializarRegistroSimple();
    if($eku_param_tipo_naturaleza_receptor_gral_condicion_iva){
        $arr['id'] = $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId();
        $arr['hash'] = $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

