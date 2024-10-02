<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_TIPO_COMPRADOR_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_tipo_comprador = VtaTipoComprador::getOxId($id);
    if($vta_tipo_comprador->getEstado() == 1){
        $vta_tipo_comprador->setEstado(0);
    }else{
        $vta_tipo_comprador->setEstado(1);
    }
    $vta_tipo_comprador->cambiarEstado();
}        
?>

