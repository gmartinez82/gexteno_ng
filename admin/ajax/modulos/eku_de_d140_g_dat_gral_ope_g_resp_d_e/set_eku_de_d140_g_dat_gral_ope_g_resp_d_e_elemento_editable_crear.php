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
if(UsCredencial::getEsAcreditado('EKU_DE_D140_G_DAT_GRAL_OPE_G_RESP_D_E_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_d140_g_dat_gral_ope_g_resp_d_e = EkuDeD140GDatGralOpeGRespDE::setInicializarRegistroSimple();
    if($eku_de_d140_g_dat_gral_ope_g_resp_d_e){
        $arr['id'] = $eku_de_d140_g_dat_gral_ope_g_resp_d_e->getId();
        $arr['hash'] = $eku_de_d140_g_dat_gral_ope_g_resp_d_e->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

