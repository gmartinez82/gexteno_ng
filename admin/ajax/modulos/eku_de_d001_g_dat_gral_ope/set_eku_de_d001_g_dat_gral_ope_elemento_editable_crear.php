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
if(UsCredencial::getEsAcreditado('EKU_DE_D001_G_DAT_GRAL_OPE_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_d001_g_dat_gral_ope = EkuDeD001GDatGralOpe::setInicializarRegistroSimple();
    if($eku_de_d001_g_dat_gral_ope){
        $arr['id'] = $eku_de_d001_g_dat_gral_ope->getId();
        $arr['hash'] = $eku_de_d001_g_dat_gral_ope->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

