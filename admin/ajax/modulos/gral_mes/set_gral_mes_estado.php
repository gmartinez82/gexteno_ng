<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_MES_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_mes = GralMes::getOxId($id);
    if($gral_mes->getEstado() == 1){
        $gral_mes->setEstado(0);
    }else{
        $gral_mes->setEstado(1);
    }
    $gral_mes->cambiarEstado();
}        
?>

