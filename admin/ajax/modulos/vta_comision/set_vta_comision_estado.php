<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_COMISION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_comision = VtaComision::getOxId($id);
    if($vta_comision->getEstado() == 1){
        $vta_comision->setEstado(0);
    }else{
        $vta_comision->setEstado(1);
    }
    $vta_comision->cambiarEstado();
}        
?>

