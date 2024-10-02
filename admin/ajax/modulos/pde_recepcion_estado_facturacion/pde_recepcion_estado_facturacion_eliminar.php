<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ESTADO_FACTURACION_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_recepcion_estado_facturacion = new PdeRecepcionEstadoFacturacion();
    $pde_recepcion_estado_facturacion->setId($id, false);
    $pde_recepcion_estado_facturacion->deleteAll();
}    
?>

