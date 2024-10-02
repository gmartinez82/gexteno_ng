<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_RUTA_GRAL_DIA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_ruta_gral_dia = new GralRutaGralDia();
    $gral_ruta_gral_dia->setId($id, false);
    $gral_ruta_gral_dia->deleteAll();
}    
?>

