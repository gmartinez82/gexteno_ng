<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_EXENCION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_tributo_exencion = VtaTributoExencion::getOxId($id);
    if($vta_tributo_exencion->getEstado() == 1){
        $vta_tributo_exencion->setEstado(0);
    }else{
        $vta_tributo_exencion->setEstado(1);
    }
    $vta_tributo_exencion->cambiarEstado();
}        
?>

