<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $fnd_chq_tipo_emision = FndChqTipoEmision::getOxId($id);
    if($fnd_chq_tipo_emision->getEstado() == 1){
        $fnd_chq_tipo_emision->setEstado(0);
    }else{
        $fnd_chq_tipo_emision->setEstado(1);
    }
    $fnd_chq_tipo_emision->cambiarEstado();
}        
?>

