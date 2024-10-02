<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_CONVENIO_DESCUENTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_convenio_descuento = PrvConvenioDescuento::getOxId($id);
    if($prv_convenio_descuento->getEstado() == 1){
        $prv_convenio_descuento->setEstado(0);
    }else{
        $prv_convenio_descuento->setEstado(1);
    }
    $prv_convenio_descuento->cambiarEstado();
}        
?>

