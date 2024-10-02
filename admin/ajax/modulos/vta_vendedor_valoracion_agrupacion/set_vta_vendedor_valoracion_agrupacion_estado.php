<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_AGRUPACION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_vendedor_valoracion_agrupacion = VtaVendedorValoracionAgrupacion::getOxId($id);
    if($vta_vendedor_valoracion_agrupacion->getEstado() == 1){
        $vta_vendedor_valoracion_agrupacion->setEstado(0);
    }else{
        $vta_vendedor_valoracion_agrupacion->setEstado(1);
    }
    $vta_vendedor_valoracion_agrupacion->cambiarEstado();
}        
?>

