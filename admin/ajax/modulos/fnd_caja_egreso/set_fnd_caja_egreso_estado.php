<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CAJA_EGRESO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $fnd_caja_egreso = FndCajaEgreso::getOxId($id);
    if($fnd_caja_egreso->getEstado() == 1){
        $fnd_caja_egreso->setEstado(0);
    }else{
        $fnd_caja_egreso->setEstado(1);
    }
    $fnd_caja_egreso->cambiarEstado();
}        
?>

