<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ESTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $fnd_caja_movimiento_estado = FndCajaMovimientoEstado::getOxId($id);
    if($fnd_caja_movimiento_estado->getEstado() == 1){
        $fnd_caja_movimiento_estado->setEstado(0);
    }else{
        $fnd_caja_movimiento_estado->setEstado(1);
    }
    $fnd_caja_movimiento_estado->cambiarEstado();
}        
?>

