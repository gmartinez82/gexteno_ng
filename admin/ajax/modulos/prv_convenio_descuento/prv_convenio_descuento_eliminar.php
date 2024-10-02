<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_CONVENIO_DESCUENTO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $prv_convenio_descuento = new PrvConvenioDescuento();
    $prv_convenio_descuento->setId($id, false);
    $prv_convenio_descuento->deleteAll();
}    
?>

