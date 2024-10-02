<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getSesPagCantidad(), EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_EA790_G_CAM_ESP_G_GRUP_SEG_G_GRUP_POL_SEG_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg = EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getOxId($identificador);
        if($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg){
            $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setOrden($orden_paginado);
            $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->saveDesdeProceso();
        }
    }
    
}

