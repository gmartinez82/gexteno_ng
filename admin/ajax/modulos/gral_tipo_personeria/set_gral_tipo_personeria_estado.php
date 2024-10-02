<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_TIPO_PERSONERIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_tipo_personeria = GralTipoPersoneria::getOxId($id);
    if($gral_tipo_personeria->getEstado() == 1){
        $gral_tipo_personeria->setEstado(0);
    }else{
        $gral_tipo_personeria->setEstado(1);
    }
    $gral_tipo_personeria->cambiarEstado();
}        
?>

