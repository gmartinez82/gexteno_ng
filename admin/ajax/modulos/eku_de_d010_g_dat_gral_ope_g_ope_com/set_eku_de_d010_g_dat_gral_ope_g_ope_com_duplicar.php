<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_de_d010_g_dat_gral_ope_g_ope_com = EkuDeD010GDatGralOpeGOpeCom::getOxId($id);
    $eku_de_d010_g_dat_gral_ope_g_ope_com->duplicarEkuDeD010GDatGralOpeGOpeCom();
}    

