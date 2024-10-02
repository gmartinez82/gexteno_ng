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
if(UsCredencial::getEsAcreditado('EKU_DE_D130_G_DAT_GRAL_OPE_G_EMIS_G_ACT_ECO_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco = EkuDeD130GDatGralOpeGEmisGActEco::setInicializarRegistroSimple();
    if($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco){
        $arr['id'] = $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getId();
        $arr['hash'] = $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

