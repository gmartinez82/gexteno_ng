<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuDeE605GDtipDEGCamCondGPaConEIni::getSesPagCantidad(), EkuDeE605GDtipDEGCamCondGPaConEIni::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E605_G_DTIP_D_E_G_CAM_COND_G_PA_CON_E_INI_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini = EkuDeE605GDtipDEGCamCondGPaConEIni::getOxId($identificador);
        if($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini){
            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setOrden($orden_paginado);
            $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->saveDesdeProceso();
        }
    }
    
}

