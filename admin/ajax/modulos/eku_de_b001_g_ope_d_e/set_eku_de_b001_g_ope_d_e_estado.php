<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_B001_G_OPE_D_E_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_b001_g_ope_d_e = EkuDeB001GOpeDE::getOxId($id);
    if($eku_de_b001_g_ope_d_e->getEstado() == 1){
        $eku_de_b001_g_ope_d_e->setEstado(0);
    }else{
        $eku_de_b001_g_ope_d_e->setEstado(1);
    }
    $eku_de_b001_g_ope_d_e->cambiarEstado();
}        
?>

