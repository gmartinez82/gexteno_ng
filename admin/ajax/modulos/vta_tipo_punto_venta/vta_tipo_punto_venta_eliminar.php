<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_TIPO_PUNTO_VENTA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $vta_tipo_punto_venta = VtaTipoPuntoVenta::getOxId($id);
    if($vta_tipo_punto_venta){
        if($vta_tipo_punto_venta->getHash() == $hash){
            $vta_tipo_punto_venta->deleteAll();
        }
    }
}    
?>

