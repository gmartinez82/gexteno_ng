<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_ASCH01_REQ_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_asch01_req = EkuDeAsch01Req::getOxId($id);
    if($eku_de_asch01_req->getEstado() == 1){
        $eku_de_asch01_req->setEstado(0);
    }else{
        $eku_de_asch01_req->setEstado(1);
    }
    $eku_de_asch01_req->cambiarEstado();
}        
?>

