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
if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_GRAL_TIPO_PERSONERIA_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_param_tipo_contribuyente_gral_tipo_personeria = EkuParamTipoContribuyenteGralTipoPersoneria::setInicializarRegistroSimple();
    if($eku_param_tipo_contribuyente_gral_tipo_personeria){
        $arr['id'] = $eku_param_tipo_contribuyente_gral_tipo_personeria->getId();
        $arr['hash'] = $eku_param_tipo_contribuyente_gral_tipo_personeria->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

