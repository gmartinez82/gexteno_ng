<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_F001_G_TOT_SUB_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_f001_g_tot_sub = EkuDeF001GTotSub::getOxId($id);
    if($eku_de_f001_g_tot_sub->getEstado() == 1){
        $eku_de_f001_g_tot_sub->setEstado(0);
    }else{
        $eku_de_f001_g_tot_sub->setEstado(1);
    }
    $eku_de_f001_g_tot_sub->cambiarEstado();
}        
?>

