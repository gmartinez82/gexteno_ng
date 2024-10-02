<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_B001_G_OPE_D_E_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_de_b001_g_ope_d_e = EkuDeB001GOpeDE::getOxId($id);
    if($eku_de_b001_g_ope_d_e){
        if($eku_de_b001_g_ope_d_e->getHash() == $hash){
            $eku_de_b001_g_ope_d_e->deleteAll();
        }
    }
}    
?>

