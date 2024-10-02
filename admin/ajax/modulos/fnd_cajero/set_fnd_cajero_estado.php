<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CAJERO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $fnd_cajero = FndCajero::getOxId($id);
    if($fnd_cajero->getEstado() == 1){
        $fnd_cajero->setEstado(0);
    }else{
        $fnd_cajero->setEstado(1);
    }
    $fnd_cajero->cambiarEstado();
}        
?>

