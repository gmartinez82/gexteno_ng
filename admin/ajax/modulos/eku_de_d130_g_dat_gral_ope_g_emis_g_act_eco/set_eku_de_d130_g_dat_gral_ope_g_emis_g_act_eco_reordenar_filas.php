<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuDeD130GDatGralOpeGEmisGActEco::getSesPagCantidad(), EkuDeD130GDatGralOpeGEmisGActEco::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_D130_G_DAT_GRAL_OPE_G_EMIS_G_ACT_ECO_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco = EkuDeD130GDatGralOpeGEmisGActEco::getOxId($identificador);
        if($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco){
            $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setOrden($orden_paginado);
            $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->saveDesdeProceso();
        }
    }
    
}

