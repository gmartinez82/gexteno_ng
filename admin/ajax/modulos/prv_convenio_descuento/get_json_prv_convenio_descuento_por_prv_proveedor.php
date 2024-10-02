<?php
include "_autoload.php";

$proveedor_id = Gral::getVars(2, 'proveedor_id', null);
$prv_proveedor = PrvProveedor::getOxId($proveedor_id);

$c = new Criterio();
$c->add(PrvConvenioDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
$c->addTabla(PrvConvenioDescuento::GEN_TABLA);
$c->addOrden(PrvConvenioDescuento::GEN_ATTR_PORCENTAJE_DESCUENTO, 'asc');
$c->addOrden(PrvConvenioDescuento::GEN_ATTR_DESCRIPCION, 'asc');
$c->setCriterios();

$prv_convenio_descuentos = $prv_proveedor->getPrvConvenioDescuentos(null, $c);

$arr = array();

foreach($prv_convenio_descuentos as $prv_convenio_descuento){
	$arr_convenio_descuento = array(
		'id' => $prv_convenio_descuento->getId(),
		'descripcion' => $prv_convenio_descuento->getDescripcion(),
	);
	$arr[] = $arr_convenio_descuento;
}

$arr_json = json_encode($arr);
echo $arr_json;
?>