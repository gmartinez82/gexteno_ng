<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_LENGUAJE_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_lenguaje = new GralLenguaje();
    $gral_lenguaje->setId($id, false);
    $gral_lenguaje->deleteAll();
}    
?>

