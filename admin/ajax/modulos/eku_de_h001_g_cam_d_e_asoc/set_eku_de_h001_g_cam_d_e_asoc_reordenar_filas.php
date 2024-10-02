<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuDeH001GCamDEAsoc::getSesPagCantidad(), EkuDeH001GCamDEAsoc::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_de_h001_g_cam_d_e_asoc = EkuDeH001GCamDEAsoc::getOxId($identificador);
        if($eku_de_h001_g_cam_d_e_asoc){
            $eku_de_h001_g_cam_d_e_asoc->setOrden($orden_paginado);
            $eku_de_h001_g_cam_d_e_asoc->saveDesdeProceso();
        }
    }
    
}

