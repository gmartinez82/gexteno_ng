<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_CREDENCIAL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $us_credencial = UsCredencial::getOxId($id);
    if($us_credencial->getEstado() == 1){
        $us_credencial->setEstado(0);
    }else{
        $us_credencial->setEstado(1);
    }
    $us_credencial->cambiarEstado();
}        
?>

