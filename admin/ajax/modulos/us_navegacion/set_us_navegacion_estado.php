<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_NAVEGACION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $us_navegacion = UsNavegacion::getOxId($id);
    if($us_navegacion->getEstado() == 1){
        $us_navegacion->setEstado(0);
    }else{
        $us_navegacion->setEstado(1);
    }
    $us_navegacion->cambiarEstado();
}        
?>

