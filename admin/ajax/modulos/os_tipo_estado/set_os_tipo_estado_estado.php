<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OS_TIPO_ESTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $os_tipo_estado = OsTipoEstado::getOxId($id);
    if($os_tipo_estado->getEstado() == 1){
        $os_tipo_estado->setEstado(0);
    }else{
        $os_tipo_estado->setEstado(1);
    }
    $os_tipo_estado->cambiarEstado();
}        
?>

