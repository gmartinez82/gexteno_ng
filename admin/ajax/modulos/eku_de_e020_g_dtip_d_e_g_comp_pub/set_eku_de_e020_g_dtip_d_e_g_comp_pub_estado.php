<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E020_G_DTIP_D_E_G_COMP_PUB_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e020_g_dtip_d_e_g_comp_pub = EkuDeE020GDtipDEGCompPub::getOxId($id);
    if($eku_de_e020_g_dtip_d_e_g_comp_pub->getEstado() == 1){
        $eku_de_e020_g_dtip_d_e_g_comp_pub->setEstado(0);
    }else{
        $eku_de_e020_g_dtip_d_e_g_comp_pub->setEstado(1);
    }
    $eku_de_e020_g_dtip_d_e_g_comp_pub->cambiarEstado();
}        
?>

