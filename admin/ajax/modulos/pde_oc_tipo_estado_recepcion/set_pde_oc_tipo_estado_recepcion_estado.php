<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_RECEPCION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_oc_tipo_estado_recepcion = PdeOcTipoEstadoRecepcion::getOxId($id);
    if($pde_oc_tipo_estado_recepcion->getEstado() == 1){
        $pde_oc_tipo_estado_recepcion->setEstado(0);
    }else{
        $pde_oc_tipo_estado_recepcion->setEstado(1);
    }
    $pde_oc_tipo_estado_recepcion->cambiarEstado();
}        
?>

