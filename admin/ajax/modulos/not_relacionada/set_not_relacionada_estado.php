<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOT_RELACIONADA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $not_relacionada = NotRelacionada::getOxId($id);
    if($not_relacionada->getEstado() == 1){
        $not_relacionada->setEstado(0);
    }else{
        $not_relacionada->setEstado(1);
    }
    $not_relacionada->cambiarEstado();
}        
?>

