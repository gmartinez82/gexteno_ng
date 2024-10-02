<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_TIPO_NECESIDAD_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_tipo_necesidad = InsTipoNecesidad::getOxId($id);
    if($ins_tipo_necesidad->getEstado() == 1){
        $ins_tipo_necesidad->setEstado(0);
    }else{
        $ins_tipo_necesidad->setEstado(1);
    }
    $ins_tipo_necesidad->cambiarEstado();
}        
?>

