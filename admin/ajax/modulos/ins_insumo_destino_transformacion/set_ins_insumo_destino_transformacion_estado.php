<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_INSUMO_DESTINO_TRANSFORMACION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_insumo_destino_transformacion = InsInsumoDestinoTransformacion::getOxId($id);
    if($ins_insumo_destino_transformacion->getEstado() == 1){
        $ins_insumo_destino_transformacion->setEstado(0);
    }else{
        $ins_insumo_destino_transformacion->setEstado(1);
    }
    $ins_insumo_destino_transformacion->cambiarEstado();
}        
?>

