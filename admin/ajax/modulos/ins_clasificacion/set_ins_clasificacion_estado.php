<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_CLASIFICACION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_clasificacion = InsClasificacion::getOxId($id);
    if($ins_clasificacion->getEstado() == 1){
        $ins_clasificacion->setEstado(0);
    }else{
        $ins_clasificacion->setEstado(1);
    }
    $ins_clasificacion->cambiarEstado();
}        
?>

