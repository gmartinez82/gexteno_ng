<?php
include "_autoload.php";

$prv_proveedor_id          = Gral::getVars(Gral::VARS_GET, 'prv_proveedor_id', null);
$prv_descuento_financieros = PrvDescuentoFinanciero::getOsxPrvProveedorId($prv_proveedor_id);

$arr = array();

foreach($prv_descuento_financieros as $prv_descuento_financiero){
    $arr_prv_descuento_financiero = array(
        'id'          => $prv_descuento_financiero->getId(),
        'descripcion' => $prv_descuento_financiero->getDescripcion(),
    );
    $arr[] = $arr_prv_descuento_financiero;
}

$arr_json = json_encode($arr);
echo $arr_json;
?>