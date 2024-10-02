<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = EkuDeE960GDtipDEGTranspGVehTras::getOxId($id);
    if($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEstado() == 1){
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEstado(0);
    }else{
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEstado(1);
    }
    $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->cambiarEstado();
}        
?>

