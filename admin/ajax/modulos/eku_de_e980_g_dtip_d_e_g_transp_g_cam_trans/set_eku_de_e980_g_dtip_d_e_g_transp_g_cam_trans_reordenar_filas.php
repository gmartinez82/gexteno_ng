<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuDeE980GDtipDEGTranspGCamTrans::getSesPagCantidad(), EkuDeE980GDtipDEGTranspGCamTrans::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = EkuDeE980GDtipDEGTranspGCamTrans::getOxId($identificador);
        if($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans){
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setOrden($orden_paginado);
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->saveDesdeProceso();
        }
    }
    
}

