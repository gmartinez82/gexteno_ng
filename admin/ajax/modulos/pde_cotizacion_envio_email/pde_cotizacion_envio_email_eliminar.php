<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_COTIZACION_ENVIO_EMAIL_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_cotizacion_envio_email = new PdeCotizacionEnvioEmail();
    $pde_cotizacion_envio_email->setId($id, false);
    $pde_cotizacion_envio_email->deleteAll();
}    
?>

