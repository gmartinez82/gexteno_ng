<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E630_G_DTIP_D_E_G_CAM_COND_G_PAG_CHEQ_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq = EkuDeE630GDtipDEGCamCondGPagCheq::getOxId($id);
    if($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEstado() == 1){
        $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->setEstado(0);
    }else{
        $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->setEstado(1);
    }
    $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->cambiarEstado();
}        
?>

