<?php
set_time_limit(0);

include_once 'control/seguridad.php';
include_once '_autoload.php';

$pde_centro_pedidos = PdeCentroPedido::getPdeCentroPedidos(null, null, true);
$gral_condicion_ivas = GralCondicionIva::getGralCondicionIvas(null, null, true);
$gral_tipo_ivas = GralTipoIva::getGralTipoIvas(null, null, true);
$gral_tipo_ivas_gravados = GralTipoIva::getGralTipoIvasGravados();
$pde_tributos = PdeTributo::getPdeTributos(null, null, true);

$gral_mes = GralMes::getOxId($cmb_filtro_gral_mes_id);

$pde_comprobantes = PdeComprobante::getPdeComprobantes($gral_empresa_id = $cmb_filtro_gral_empresa_id, $fecha_desde = false, $fecha_hasta = false, $cmb_filtro_gral_mes_id, $cmb_filtro_anio, $prv_proveedor_id = $cmb_filtro_prv_proveedor_id, $incluir_recibos = false, $orden = 'ASC', $solo_importaciones = false, $incluir_retenciones_venta = true);
//Gral::prr($pde_comprobantes);
//exit;

$arr_resumen_libro_compras = PdeComprobante::getArrResumenLibroVentas($pde_comprobantes);
//Gral::prr($arr_resumen_libro_compras);
//exit;

$fecha_desde = Date::getPrimeraFechaDelMes($gral_mes->getCodigoNumero(), $cmb_filtro_anio);
$fecha_hasta = Date::getUltimaFechaDelMes($gral_mes->getCodigoNumero(), $cmb_filtro_anio);

$vta_recibo_items_retencions = VtaReciboItemRetencion::getVtaReciboItemsRetenciones($fecha_desde, $fecha_hasta);
$pde_orden_pago_pde_tributos_retencions = PdeOrdenPagoPdeTributo::getPdeOrdenPagoPdeTributosRetenciones($fecha_desde, $fecha_hasta);

//$gral_empresa_id = 1;
$gral_empresa = GralEmpresa::getOxId($gral_empresa_id);
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

if ($gral_empresa) {
    $empresa_descripcion = $gral_empresa->getDescripcion();
}

if ($prv_proveedor) {
    $proveedor_descripcion = $prv_proveedor->getDescripcion();
}



/** PHPExcel */
require_once Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';

// Create new PHPExcel object
$xls = new PHPExcel();
$xls->getProperties()->setCreator(Gral::getConfig("sistema_nombre"))
        ->setLastModifiedBy(Gral::getConfig("sistema_nombre"))
        ->setTitle(Gral::getConfig("sistema_nombre"))
        ->setSubject(Gral::getConfig("sistema_nombre"))
        ->setDescription(Gral::getConfig("sistema_nombre"))
        ->setKeywords(Gral::getConfig("sistema_nombre"))
        ->setCategory(Gral::getConfig("sistema_nombre"));


include "rep_cntb_libro_compras_xlsx_1_resumen_subtotal.php";
include "rep_cntb_libro_compras_xlsx_2_resumen_iva.php";
include "rep_cntb_libro_compras_xlsx_3_resumen_otros_tributos.php";
include "rep_cntb_libro_compras_xlsx_4_comprobantes.php";
include "rep_cntb_libro_compras_xlsx_5_retenciones_de_clientes.php";
include "rep_cntb_libro_compras_xlsx_6_retenciones_a_proveedores.php";


// se reactiva el primer libro para que al abrir lo muestre
$xls->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $db_nombre_pagina . '.xlsx"');
header('Cache-Control: max-age=0');

$oWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$oWriter->save('php://output');
exit;
?>
