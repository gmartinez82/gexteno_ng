<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuDeD200GDatGralOpeGDatRec::getSesPagCantidad(), EkuDeD200GDatGralOpeGDatRec::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_de_d200_g_dat_gral_ope_g_dat_rec = EkuDeD200GDatGralOpeGDatRec::getOxId($identificador);
        if($eku_de_d200_g_dat_gral_ope_g_dat_rec){
            $eku_de_d200_g_dat_gral_ope_g_dat_rec->setOrden($orden_paginado);
            $eku_de_d200_g_dat_gral_ope_g_dat_rec->saveDesdeProceso();
        }
    }
    
}

