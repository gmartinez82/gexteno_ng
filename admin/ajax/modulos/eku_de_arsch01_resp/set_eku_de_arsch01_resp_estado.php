<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_arsch01_resp = EkuDeArsch01Resp::getOxId($id);
    if($eku_de_arsch01_resp->getEstado() == 1){
        $eku_de_arsch01_resp->setEstado(0);
    }else{
        $eku_de_arsch01_resp->setEstado(1);
    }
    $eku_de_arsch01_resp->cambiarEstado();
}        
?>

