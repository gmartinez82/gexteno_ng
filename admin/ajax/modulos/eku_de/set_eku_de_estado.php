<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de = EkuDe::getOxId($id);
    if($eku_de->getEstado() == 1){
        $eku_de->setEstado(0);
    }else{
        $eku_de->setEstado(1);
    }
    $eku_de->cambiarEstado();
}        
?>

