<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $fnd_chq_cheque = FndChqCheque::getOxId($id);
    if($fnd_chq_cheque->getEstado() == 1){
        $fnd_chq_cheque->setEstado(0);
    }else{
        $fnd_chq_cheque->setEstado(1);
    }
    $fnd_chq_cheque->cambiarEstado();
}        
?>

