<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_SEXO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_sexo = GralSexo::getOxId($id);
    if($gral_sexo->getEstado() == 1){
        $gral_sexo->setEstado(0);
    }else{
        $gral_sexo->setEstado(1);
    }
    $gral_sexo->cambiarEstado();
}        
?>

