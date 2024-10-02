<?php
include "_autoload.php";

$prv_insumo_id = Gral::getVars(2, 'prv_insumo_id', 0);
$prv_insumo = PrvInsumo::getOxId($prv_insumo_id);
if($prv_insumo){
    $ins_insumo = $prv_insumo->getInsInsumo();
    $prv_insumo_costo = $prv_insumo->getPrvInsumoCostoActual();
    if($prv_insumo_costo){
        $prv_proveedor = $prv_insumo->getPrvProveedor();
        
        $costo = $prv_insumo_costo->getImporteNeto();
        $observacion = 'Actualización por selección manual de costo de proveedor "'.$prv_proveedor->getDescripcion().'"';

        // se actualiza costo de insumo
        $ins_insumo->setInsInsumoCostoActual(
            $prv_importacion = false, $costo, $observacion
        );        
    }
}

?>