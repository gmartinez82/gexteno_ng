<?php
include "_autoload.php";

$cont = Gral::getVars(2, 'cont', 0);
$ins_insumo_identificado_id = Gral::getVars(2, 'ins_insumo_identificado_id', 0);
$ins_insumo_identificado = InsInsumoIdentificado::getOxId($ins_insumo_identificado_id);

if($ins_insumo_identificado){
	$ins_insumo_identificado_movimiento = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
	//Gral::prr($ins_insumo_identificado_movimiento);
	
	if(!$ins_insumo_identificado_movimiento){
		$ins_insumo_identificado_movimiento = new InsInsumoIdentificadoMovimiento();
	}	

	$array_en_sesion = Gral::getSes('MECANO_PDI_AJUSTE_INS_IDENTIFICADO_ARRAY_TMP');
	$array_en_sesion[$cont] = $ins_insumo_identificado_id;
	Gral::setSes('MECANO_PDI_AJUSTE_INS_IDENTIFICADO_ARRAY_TMP', $array_en_sesion);
}else{
	$ins_insumo_identificado = new InsInsumoIdentificado();
	$ins_insumo_identificado_movimiento = new InsInsumoIdentificadoMovimiento();

	$array_en_sesion = Gral::getSes('MECANO_PDI_AJUSTE_INS_IDENTIFICADO_ARRAY_TMP');
	unset($array_en_sesion[$cont]);
	Gral::setSes('MECANO_PDI_AJUSTE_INS_IDENTIFICADO_ARRAY_TMP', $array_en_sesion);
}


$arr = array(
	'cont' => $cont,

	'id' => $ins_insumo_identificado_movimiento->getId(),
	'km' => $ins_insumo_identificado_movimiento->getKm(),
	'instancia_id' => $ins_insumo_identificado_movimiento->getInsInsumoInstanciaId(),
);

$arr_json = json_encode($arr);
echo $arr_json;
?>