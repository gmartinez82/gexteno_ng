<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_MONEDA_TIPO_CAMBIO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_moneda_tipo_cambio = new GralMonedaTipoCambio();
    $gral_moneda_tipo_cambio->setId($id, false);
    $gral_moneda_tipo_cambio->deleteAll();
}    
?>

