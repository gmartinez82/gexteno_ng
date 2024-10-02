<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PER_MOV_TIPO_MOVIMIENTO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $per_mov_tipo_movimiento = PerMovTipoMovimiento::getOxId($id);
    if($per_mov_tipo_movimiento){
        if($per_mov_tipo_movimiento->getHash() == $hash){
            $per_mov_tipo_movimiento->deleteAll();
        }
    }
}    
?>

