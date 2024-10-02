<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_DESCUENTO_COMERCIAL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_descuento_comercial = PrvDescuentoComercial::getOxId($id);
    if($prv_descuento_comercial->getEstado() == 1){
        $prv_descuento_comercial->setEstado(0);
    }else{
        $prv_descuento_comercial->setEstado(1);
    }
    $prv_descuento_comercial->cambiarEstado();
}        
?>

