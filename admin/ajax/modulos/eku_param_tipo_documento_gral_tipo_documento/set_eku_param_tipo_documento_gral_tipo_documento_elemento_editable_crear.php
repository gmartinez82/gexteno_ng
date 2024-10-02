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
if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_DOCUMENTO_GRAL_TIPO_DOCUMENTO_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_param_tipo_documento_gral_tipo_documento = EkuParamTipoDocumentoGralTipoDocumento::setInicializarRegistroSimple();
    if($eku_param_tipo_documento_gral_tipo_documento){
        $arr['id'] = $eku_param_tipo_documento_gral_tipo_documento->getId();
        $arr['hash'] = $eku_param_tipo_documento_gral_tipo_documento->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

