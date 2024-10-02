<?php
include "_autoload.php";

$pdi_pedido_entrega_cmb_pan_panol_origen_id = Gral::getVars(2, "pdi_pedido_entrega_cmb_pan_panol_origen_id", null);
$pdi_pedido_entrega_dbsug_ins_insumo_id = Gral::getVars(2, "pdi_pedido_entrega_dbsug_ins_insumo_id", 0);
$pdi_pedido_entrega_txt_cantidad = Gral::getVars(2, "pdi_pedido_entrega_txt_cantidad", null);
$pdi_pedido_entrega_txa_observacion = Gral::getVars(2, "pdi_pedido_entrega_txa_observacion", null);

$pdi_pedido_entrega_cmb_veh_coche_id = Gral::getVars(2, "pdi_pedido_entrega_cmb_veh_coche_id", null);
$pdi_pedido_entrega_cmb_ope_operario_id = Gral::getVars(2, "pdi_pedido_entrega_cmb_ope_operario_id", null);
$pdi_pedido_entrega_cmb_tal_orden_trabajo_id = Gral::getVars(2, "pdi_pedido_entrega_cmb_tal_orden_trabajo_id", null);
$pdi_pedido_entrega_cmb_tal_tarea_resuelta_id = Gral::getVars(2, "pdi_pedido_entrega_cmb_tal_tarea_resuelta_id", null);

$cantidad = $pdi_pedido_entrega_txt_cantidad;
$panol_destino_id = $pdi_pedido_entrega_cmb_pan_panol_origen_id;
$veh_coche_id = $pdi_pedido_entrega_cmb_veh_coche_id;
$panol_id = $pdi_pedido_entrega_cmb_pan_panol_origen_id;

$pan_panol = PanPanol::getOxId($pdi_pedido_entrega_cmb_pan_panol_origen_id);
$veh_coche = VehCoche::getOxId($veh_coche_id);
$ope_operario = OpeOperario::getOxId($pdi_pedido_entrega_cmb_ope_operario_id);
$tal_orden_trabajo = TalOrdenTrabajo::getOxId($pdi_pedido_entrega_cmb_tal_orden_trabajo_id);
$tal_tarea_resuelta = TalTareaResuelta::getOxId($pdi_pedido_entrega_cmb_tal_tarea_resuelta_id);
$glp_galpon = $pan_panol->getGlpGalpon();

$ins_insumo = InsInsumo::getOxId($pdi_pedido_entrega_dbsug_ins_insumo_id);
$pan_panol = PanPanol::getOxId($panol_id);

$cantidad_en_stock = 0;
if($ins_insumo && $pan_panol){
    $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
    if($ins_stock_resumen){
        $cantidad_en_stock = $ins_stock_resumen->getCantidad();
    }
}

$arr['error'] = false;

/* Control Entrante */
if(!$pdi_pedido_entrega_cmb_pan_panol_origen_id){
	$arr['pdi_pedido_entrega_cmb_pan_panol_origen_id_error'] = 'Debe Indicar un Panol';
	$arr['error'] = true;
}
if($pdi_pedido_entrega_dbsug_ins_insumo_id == 0){
	$arr['pdi_pedido_entrega_dbsug_ins_insumo_id_error'] = 'Debe Indicar un Insumo';
	$arr['error'] = true;
}
if(!$pdi_pedido_entrega_cmb_veh_coche_id){
	$arr['pdi_pedido_entrega_cmb_veh_coche_id_error'] = 'Debe Indicar un Coche';
	$arr['error'] = true;
}
if(!$pdi_pedido_entrega_cmb_ope_operario_id){
	$arr['pdi_pedido_entrega_cmb_ope_operario_id_error'] = 'Debe Indicar un Operario';
	$arr['error'] = true;
}
if(!$pdi_pedido_entrega_cmb_tal_orden_trabajo_id){
	$arr['pdi_pedido_entrega_cmb_tal_orden_trabajo_id_error'] = 'Debe Indicar una Orden de Trabajo';
	$arr['error'] = true;
}
if(!$pdi_pedido_entrega_cmb_tal_tarea_resuelta_id){
	$arr['pdi_pedido_entrega_cmb_tal_tarea_resuelta_id_error'] = 'Debe Indicar una Tarea Resuelta';
	$arr['error'] = true;
}
// se controla el stock del panol con respecto a lo entregado
if($ins_insumo && $pan_panol){
    if($cantidad > $cantidad_en_stock){
            $arr['pdi_pedido_entrega_cantidad_stock_error'] = 'La cantidad entregada SUPERA el STOCK Actual';
            $arr['error'] = true;
    }
}else{
        $arr['pdi_pedido_entrega_cantidad_stock_error'] = 'Debe elegir un Insumo y un Pañol';
        $arr['error'] = true;    
}

$arr_json = json_encode($arr);
echo $arr_json;
?>