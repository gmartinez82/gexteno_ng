<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ESTADO_FACTURACION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_recepcion_estado_facturacion = PdeRecepcionEstadoFacturacion::getOxId($id);
    if($pde_recepcion_estado_facturacion->getEstado() == 1){
        $pde_recepcion_estado_facturacion->setEstado(0);
    }else{
        $pde_recepcion_estado_facturacion->setEstado(1);
    }
    $pde_recepcion_estado_facturacion->cambiarEstado();
}        
?>

