<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuDeE770GDtipDEGCamItemGVehNuevo::getSesPagCantidad(), EkuDeE770GDtipDEGCamItemGVehNuevo::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = EkuDeE770GDtipDEGCamItemGVehNuevo::getOxId($identificador);
        if($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo){
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setOrden($orden_paginado);
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->saveDesdeProceso();
        }
    }
    
}

