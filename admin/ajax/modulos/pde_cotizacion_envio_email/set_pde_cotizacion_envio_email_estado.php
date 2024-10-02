<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_COTIZACION_ENVIO_EMAIL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_cotizacion_envio_email = PdeCotizacionEnvioEmail::getOxId($id);
    if($pde_cotizacion_envio_email->getEstado() == 1){
        $pde_cotizacion_envio_email->setEstado(0);
    }else{
        $pde_cotizacion_envio_email->setEstado(1);
    }
    $pde_cotizacion_envio_email->cambiarEstado();
}        
?>

