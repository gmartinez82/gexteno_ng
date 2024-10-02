<?php
include "_autoload.php";

$categoria_id = Gral::getVars(2, 'categoria_id', null);
$ins_categoria = InsCategoria::getOxId($categoria_id);

$comprable = Gral::getVars(2, 'comprable', 0);
$consumible = Gral::getVars(2, 'consumible', 0);
$transformable_origen = Gral::getVars(2, 'transformable_origen', 0);
$transformable_destino = Gral::getVars(2, 'transformable_destino', 0);

$c = new Criterio();
$c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
if($comprable != 0){
	//$c->add(InsInsumo::GEN_ATTR_ES_COMPRABLE, 1, Criterio::IGUAL);
}
if($consumible != 0){
	//$c->add(InsInsumo::GEN_ATTR_ES_CONSUMIBLE, 1, Criterio::IGUAL);
}
if($transformable_origen != 0){
	//$c->add(InsInsumo::GEN_ATTR_ES_TRANSFORMABLE_ORIGEN, 1, Criterio::IGUAL);
}
if($transformable_destino != 0){
	//$c->add(InsInsumo::GEN_ATTR_ES_TRANSFORMABLE_DESTINO, 1, Criterio::IGUAL);
}
$c->addTabla(InsInsumo::GEN_TABLA);
$c->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION, 'asc');
$c->setCriterios();

$ins_insumos = $ins_categoria->getInsInsumos(null, $c);

$arr = array();

foreach($ins_insumos as $ins_insumo){
	$arr_insumo = array(
		'id' => $ins_insumo->getId(),
		'descripcion' => $ins_insumo->getDescripcion(),
	);
	$arr[] = $arr_insumo;
}

$arr_json = json_encode($arr);
echo $arr_json;
?>
