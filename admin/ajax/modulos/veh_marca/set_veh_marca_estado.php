<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VEH_MARCA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $veh_marca = VehMarca::getOxId($id);
    if($veh_marca->getEstado() == 1){
        $veh_marca->setEstado(0);
    }else{
        $veh_marca->setEstado(1);
    }
    $veh_marca->cambiarEstado();
}        
?>

