<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_F001_G_TOT_SUB_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_de_f001_g_tot_sub = EkuDeF001GTotSub::getOxId($id);
    if($eku_de_f001_g_tot_sub){
        if($eku_de_f001_g_tot_sub->getHash() == $hash){
            $eku_de_f001_g_tot_sub->deleteAll();
        }
    }
}    
?>

