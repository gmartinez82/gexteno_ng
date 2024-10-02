<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_PAGO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $fnd_chq_tipo_pago = FndChqTipoPago::getOxId($id);
    if($fnd_chq_tipo_pago->getEstado() == 1){
        $fnd_chq_tipo_pago->setEstado(0);
    }else{
        $fnd_chq_tipo_pago->setEstado(1);
    }
    $fnd_chq_tipo_pago->cambiarEstado();
}        
?>

