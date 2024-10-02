<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$cantidad = Gral::getVars(2, 'cantidad', 0);
$ot_id = Gral::getVars(2, 'ot_id', 0);
$tarea_resuelta_id = Gral::getVars(2, 'tarea_resuelta_id', 0);
$panol_id = Gral::getVars(2, 'panol_id', 0);


$ins_insumo = InsInsumo::getOxId($insumo_id);
$tal_orden_trabajo = TalOrdenTrabajo::getOxId($ot_id);
$tal_tarea_resuelta = TalTareaResuelta::getOxId($tarea_resuelta_id);

$pan_panol = PanPanol::getOxId($panol_id);

$cantidad_en_stock = 0;
if($ins_insumo && $pan_panol){
    $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
    if($ins_stock_resumen){
        $cantidad_en_stock = $ins_stock_resumen->getCantidad();
    }
}

$arr['error'] = false;

/* Control */
if($insumo_id == 0){
	$arr['pdi_pedido_buscador_dbsug_ins_insumo_id_error'] = 'Debe Indicar un Insumo';
	$arr['error'] = true;
}
if($cantidad <= 0){
	$arr['pdi_pedido_buscador_txt_cantidad_error'] = 'Debe Indicar una cantidad valida';
	$arr['error'] = true;
}
if($ot_id == 0){
	$arr['pdi_pedido_buscador_dbsug_tal_orden_trabajo_id_error'] = 'Debe Indicar una Orden de Trabajo';
	$arr['error'] = true;
}
if($tarea_resuelta_id == 0){
	$arr['pdi_pedido_buscador_rad_tal_tarea_resuelta_id_error'] = 'Debe Seleccionar una Tarea Resuelta donde imputar el insumo';
	$arr['error'] = true;
}


// se controla el stock del panol con respecto a lo entregado
if($ins_insumo && $pan_panol){
    if($cantidad > $cantidad_en_stock){
            $arr['pdi_pedido_buscador_txt_cantidad_error'] = 'La cantidad entregada SUPERA el STOCK Actual de: '.$cantidad_en_stock.' '.$ins_insumo->getInsUnidadMedida()->getDescripcion();
            $arr['error'] = true;
    }
}else{
        $arr['pdi_pedido_buscador_txt_cantidad_error'] = 'Debe elegir un Insumo y un Pañol';
        $arr['error'] = true;    
}

$arr_json = json_encode($arr);
echo $arr_json;
?>