<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_I001_SIGNATURE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_i001_signature = EkuDeI001Signature::getOxId($id);
    if($eku_de_i001_signature->getEstado() == 1){
        $eku_de_i001_signature->setEstado(0);
    }else{
        $eku_de_i001_signature->setEstado(1);
    }
    $eku_de_i001_signature->cambiarEstado();
}        
?>

