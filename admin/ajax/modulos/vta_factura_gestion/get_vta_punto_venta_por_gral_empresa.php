<?php

include "_autoload.php";
include Gral::getPathAbs() . "admin/control/init.php";

if($gral_sucursal_autenticada){
    $vta_punto_venta = $gral_sucursal_autenticada->getVtaPuntoVentaXGralSucursalVtaPuntoVenta();
}

$gral_empresa_id = Gral::getVars(Gral::VARS_GET, 'gral_empresa_id', null);
$vta_punto_ventas = VtaPuntoVenta::getOsxGralEmpresaId($gral_empresa_id);

$arr = array();

if ($vta_punto_venta && false) {
    $arr_vta_punto_venta = array(
        'id' => $vta_punto_venta->getId(),
        'descripcion' => $vta_punto_venta->getDescripcion(),
    );
    $arr[] = $arr_vta_punto_venta;
}else{
  foreach ($vta_punto_ventas as $vta_punto_venta) {
        $arr_vta_punto_venta = array(
            'id' => $vta_punto_venta->getId(),
            'descripcion' => $vta_punto_venta->getDescripcion(),
        );
        $arr[] = $arr_vta_punto_venta;
    }
}
/*
  foreach($vta_punto_ventas as $vta_punto_venta){
  $arr_vta_punto_venta = array(
  'id' => $vta_punto_venta->getId(),
  'descripcion' => $vta_punto_venta->getDescripcion(),
  );
  $arr[] = $arr_vta_punto_venta;
  }
 */
$arr_json = json_encode($arr);
echo $arr_json;
?>