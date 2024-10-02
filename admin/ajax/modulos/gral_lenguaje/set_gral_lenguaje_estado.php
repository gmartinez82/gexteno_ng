<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_LENGUAJE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_lenguaje = GralLenguaje::getOxId($id);
    if($gral_lenguaje->getEstado() == 1){
        $gral_lenguaje->setEstado(0);
    }else{
        $gral_lenguaje->setEstado(1);
    }
    $gral_lenguaje->cambiarEstado();
}        
?>

