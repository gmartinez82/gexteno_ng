<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PER_MOV_TIPO_ESTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $per_mov_tipo_estado = PerMovTipoEstado::getOxId($id);
    if($per_mov_tipo_estado->getEstado() == 1){
        $per_mov_tipo_estado->setEstado(0);
    }else{
        $per_mov_tipo_estado->setEstado(1);
    }
    $per_mov_tipo_estado->cambiarEstado();
}        
?>

