<?php
include "_autoload.php";

$cmb_pan_panol_id = Gral::getVars(1, 'cmb_pan_panol_id', null);
$cmb_ins_insumo_id = Gral::getVars(1, 'cmb_ins_insumo_id', null);
$txt_cantidad = Gral::getVars(1, 'txt_cantidad', 0);

$cmb_destino_ins_insumo_ids = $_POST['cmb_destino_ins_insumo_id'];
$txt_destino_cantidads = $_POST['txt_destino_cantidad'];


$arr['error'] = false;

/* Controles */
if(!Ctrl::esNumero($cmb_pan_panol_id)){
	$arr['cmb_pan_panol_id_error'] = 'Debe Seleccionar un Panol';
	$arr['error'] = true;
}		
if(!Ctrl::esNumero($cmb_ins_insumo_id)){
	$arr['cmb_ins_insumo_id_error'] = 'Debe Seleccionar un Insumo';
	$arr['error'] = true;
}else{
	$ins_insumo = InsInsumo::getOxId($cmb_ins_insumo_id);
	if($ins_insumo->getIdentificable()){
		$arr['cmb_ins_insumo_id_error'] = 'No puede transformar un Insumo IDENTIFICABLE';
		$arr['error'] = true;
	}
}
if(!Ctrl::esNumero($txt_cantidad)){
	$arr['txt_cantidad_error'] = 'Debe Seleccionar un numero';
	$arr['error'] = true;
}else{
	if($txt_cantidad <= 0){
		$arr['txt_cantidad_error'] = 'Debe Seleccionar un numero mayor a cero';
		$arr['error'] = true;
	}
}

if(!is_array($cmb_destino_ins_insumo_ids)){
	$arr['bloque_insumo_destino_error'] = 'Debe agregar al menos 1 insumo destino';
	$arr['error'] = true;
}else{
	foreach($cmb_destino_ins_insumo_ids as $i => $cmb_destino_ins_insumo_id){
		if(!Ctrl::esNumero($cmb_destino_ins_insumo_id)){
			$arr['cmb_destino_ins_insumo_id_'.$i.'_error'] = 'Debe Seleccionar un Insumo';
			$arr['error'] = true;
		}else{
			$ins_insumo = InsInsumo::getOxId($cmb_destino_ins_insumo_id);
			if($ins_insumo->getIdentificable()){
				$arr['cmb_destino_ins_insumo_id_'.$i.'_error'] = 'No puede transformar un Insumo IDENTIFICABLE';
				$arr['error'] = true;
			}
		}
	}
	foreach($txt_destino_cantidads as $i => $txt_destino_cantidad){
		if(!Ctrl::esNumero($txt_destino_cantidad)){
			$arr['txt_destino_cantidad_'.$i.'_error'] = 'Debe cargar un valor numerico';
			$arr['error'] = true;
		}elseif($txt_destino_cantidad == 0){
			$arr['txt_destino_cantidad_'.$i.'_error'] = 'Debe cargar un valor mayor a cero';
			$arr['error'] = true;
		}	
	}
}


$arr_json = json_encode($arr);
echo $arr_json;
?>