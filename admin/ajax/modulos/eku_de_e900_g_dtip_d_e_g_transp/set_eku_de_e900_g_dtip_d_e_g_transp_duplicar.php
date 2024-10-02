<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E900_G_DTIP_D_E_G_TRANSP_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e900_g_dtip_d_e_g_transp = EkuDeE900GDtipDEGTransp::getOxId($id);
    $eku_de_e900_g_dtip_d_e_g_transp->duplicarEkuDeE900GDtipDEGTransp();
}    

