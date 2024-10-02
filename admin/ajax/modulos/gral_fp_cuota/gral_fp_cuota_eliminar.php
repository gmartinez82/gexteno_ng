<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_FP_CUOTA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_fp_cuota = new GralFpCuota();
    $gral_fp_cuota->setId($id, false);
    $gral_fp_cuota->deleteAll();
}    
?>

