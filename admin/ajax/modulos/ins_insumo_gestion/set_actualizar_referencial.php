<?php
include "_autoload.php";

$prv_insumo_id = Gral::getVars(2, 'prv_insumo_id', 0);
$prv_insumo = PrvInsumo::getOxId($prv_insumo_id);

if($prv_insumo){
    if(!$prv_insumo->getReferencial()){
        // se determina que el proveedor es referencial para el costo
        $prv_insumo->setProveedorReferencial();
    }else{
        // se quita que el proveedor es referencial para el costo
        $prv_insumo->setProveedorReferencialQuitar();
    }
}

?>