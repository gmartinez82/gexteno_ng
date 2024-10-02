<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_CAJA_TIPO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_caja_tipo = new GralCajaTipo();
    $gral_caja_tipo->setId($id, false);
    $gral_caja_tipo->deleteAll();
}    
?>

