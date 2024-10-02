<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_DESCUENTO_FINANCIERO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $prv_descuento_financiero = new PrvDescuentoFinanciero();
    $prv_descuento_financiero->setId($id, false);
    $prv_descuento_financiero->deleteAll();
}    
?>

