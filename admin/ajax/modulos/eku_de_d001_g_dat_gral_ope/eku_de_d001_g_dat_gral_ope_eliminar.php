<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_D001_G_DAT_GRAL_OPE_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_de_d001_g_dat_gral_ope = EkuDeD001GDatGralOpe::getOxId($id);
    if($eku_de_d001_g_dat_gral_ope){
        if($eku_de_d001_g_dat_gral_ope->getHash() == $hash){
            $eku_de_d001_g_dat_gral_ope->deleteAll();
        }
    }
}    
?>

