<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDI_TIPO_ESTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pdi_tipo_estado = PdiTipoEstado::getOxId($id);
    if($pdi_tipo_estado->getEstado() == 1){
        $pdi_tipo_estado->setEstado(0);
    }else{
        $pdi_tipo_estado->setEstado(1);
    }
    $pdi_tipo_estado->cambiarEstado();
}        
?>

