<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_escenario = GralEscenario::getOxId($id);
    if($gral_escenario->getEstado() == 1){
        $gral_escenario->setEstado(0);
    }else{
        $gral_escenario->setEstado(1);
    }
    $gral_escenario->cambiarEstado();
}        
?>

