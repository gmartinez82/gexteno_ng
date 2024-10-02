<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VEH_COCHE_IMAGEN_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $veh_coche_imagen = VehCocheImagen::getOxId($id);
    if($veh_coche_imagen->getEstado() == 1){
        $veh_coche_imagen->setEstado(0);
    }else{
        $veh_coche_imagen->setEstado(1);
    }
    $veh_coche_imagen->cambiarEstado();
}        
?>

