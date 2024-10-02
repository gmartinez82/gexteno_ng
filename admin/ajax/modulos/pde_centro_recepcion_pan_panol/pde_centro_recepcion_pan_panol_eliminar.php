<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_PAN_PANOL_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_centro_recepcion_pan_panol = new PdeCentroRecepcionPanPanol();
    $pde_centro_recepcion_pan_panol->setId($id, false);
    $pde_centro_recepcion_pan_panol->deleteAll();
}    
?>

