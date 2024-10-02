<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_DESCUENTO_FINANCIERO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_descuento_financiero = PrvDescuentoFinanciero::getOxId($id);
    if($prv_descuento_financiero->getEstado() == 1){
        $prv_descuento_financiero->setEstado(0);
    }else{
        $prv_descuento_financiero->setEstado(1);
    }
    $prv_descuento_financiero->cambiarEstado();
}        
?>

