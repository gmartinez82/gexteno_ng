<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuDeE620GDtipDEGCamCondGPagTarCD::getSesPagCantidad(), EkuDeE620GDtipDEGCamCondGPagTarCD::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = EkuDeE620GDtipDEGCamCondGPagTarCD::getOxId($identificador);
        if($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d){
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setOrden($orden_paginado);
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->saveDesdeProceso();
        }
    }
    
}

