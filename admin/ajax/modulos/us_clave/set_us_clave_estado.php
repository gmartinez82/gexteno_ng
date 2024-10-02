<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_CLAVE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $us_clave = UsClave::getOxId($id);
    if($us_clave->getEstado() == 1){
        $us_clave->setEstado(0);
    }else{
        $us_clave->setEstado(1);
    }
    $us_clave->cambiarEstado();
}        
?>

