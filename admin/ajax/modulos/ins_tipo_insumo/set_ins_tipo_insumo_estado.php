<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_TIPO_INSUMO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_tipo_insumo = InsTipoInsumo::getOxId($id);
    if($ins_tipo_insumo->getEstado() == 1){
        $ins_tipo_insumo->setEstado(0);
    }else{
        $ins_tipo_insumo->setEstado(1);
    }
    $ins_tipo_insumo->cambiarEstado();
}        
?>

