<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_MONEDA_TIPO_CAMBIO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_moneda_tipo_cambio = GralMonedaTipoCambio::getOxId($id);
    if($gral_moneda_tipo_cambio->getEstado() == 1){
        $gral_moneda_tipo_cambio->setEstado(0);
    }else{
        $gral_moneda_tipo_cambio->setEstado(1);
    }
    $gral_moneda_tipo_cambio->cambiarEstado();
}        
?>

