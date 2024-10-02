<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_de_d200_g_dat_gral_ope_g_dat_rec = EkuDeD200GDatGralOpeGDatRec::getOxId($id);
    if($eku_de_d200_g_dat_gral_ope_g_dat_rec){
        if($eku_de_d200_g_dat_gral_ope_g_dat_rec->getHash() == $hash){
            $eku_de_d200_g_dat_gral_ope_g_dat_rec->deleteAll();
        }
    }
}    
?>

