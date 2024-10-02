<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_D140_G_DAT_GRAL_OPE_G_RESP_D_E_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_de_d140_g_dat_gral_ope_g_resp_d_e = EkuDeD140GDatGralOpeGRespDE::getOxId($id);
    $eku_de_d140_g_dat_gral_ope_g_resp_d_e->duplicarEkuDeD140GDatGralOpeGRespDE();
}    

