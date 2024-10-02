<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_COMISION_TIPO_ESTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_comision_tipo_estado = VtaComisionTipoEstado::getOxId($id);
    if($vta_comision_tipo_estado->getEstado() == 1){
        $vta_comision_tipo_estado->setEstado(0);
    }else{
        $vta_comision_tipo_estado->setEstado(1);
    }
    $vta_comision_tipo_estado->cambiarEstado();
}        
?>

