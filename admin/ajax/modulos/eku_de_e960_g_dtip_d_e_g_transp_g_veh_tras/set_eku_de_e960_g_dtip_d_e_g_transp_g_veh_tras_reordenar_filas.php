<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuDeE960GDtipDEGTranspGVehTras::getSesPagCantidad(), EkuDeE960GDtipDEGTranspGVehTras::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = EkuDeE960GDtipDEGTranspGVehTras::getOxId($identificador);
        if($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras){
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setOrden($orden_paginado);
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->saveDesdeProceso();
        }
    }
    
}

