<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once 'control/seguridad.php';
include_once '_autoload.php';

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 'A');
define('DB_XLS_CONFIG_PRIMER_FILA', '1');
// ----------------------------------------------------------------------------

$criterio = new Criterio();
$criterio->addDistinct(true);
VtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);

if ($txt_filtro_desde != '') {
    $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_filtro_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != '') {
    $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_filtro_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

if ($cmb_filtro_vta_orden_venta_tipo_estado_id != 0) {
    $criterio->add(VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID, $cmb_filtro_vta_orden_venta_tipo_estado_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_orden_venta_tipo_estado_remision_id != 0) {
    $criterio->add(VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID, $cmb_filtro_vta_orden_venta_tipo_estado_remision_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id != 0) {
    $criterio->add(VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID, $cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id, Criterio::IGUAL);
}

if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_cli_categoria_id != 0) {
    $criterio->add(CliCategoria::GEN_ATTR_ID, $cmb_filtro_cli_categoria_id, Criterio::IGUAL);
}

if ($cmb_filtro_cli_rubro_id != 0) {
    $criterio->add(CliRubro::GEN_ATTR_ID, $cmb_filtro_cli_rubro_id, Criterio::IGUAL);
}

if ($txt_filtro_descripcion != '') {
    $criterio->add(VtaOrdenVenta::GEN_ATTR_DESCRIPCION, $txt_filtro_descripcion, Criterio::LIKE);
}

if ($cmb_filtro_geo_localidad_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, $cmb_filtro_geo_localidad_id, Criterio::LIKE);
}

if ($cmb_filtro_geo_zona_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_GEO_ZONA_ID, $cmb_filtro_geo_zona_id, Criterio::LIKE);
}

if ($cmb_filtro_ins_tipo_lista_precio_id != 0) {
    $criterio->add(VtaOrdenVenta::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, $cmb_filtro_ins_tipo_lista_precio_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_actividad_id != 0) {
    $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_ACTIVIDAD_ID, $cmb_filtro_gral_actividad_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_escenario_id != 0) {
    $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_ESCENARIO_ID, $cmb_filtro_gral_escenario_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_sucursal_id != 0){
    $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, $cmb_filtro_gral_sucursal_id, Criterio::LIKE);
}

if ($cmb_filtro_ins_etiqueta_id != 0) {
    $criterio->add(InsEtiqueta::GEN_ATTR_ID, $cmb_filtro_ins_etiqueta_id, Criterio::IGUAL);
}

if ($cmb_filtro_ins_categoria_id != 0) {
    $criterio->add(InsCategoria::GEN_ATTR_ID, $cmb_filtro_ins_categoria_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_vendedor_id != 0){
    $criterio->add(VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, $cmb_filtro_vta_vendedor_id, Criterio::LIKE);
}

$criterio->addTabla(VtaOrdenVenta::GEN_TABLA);
//$criterio->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID, 'LEFT JOIN');
//$criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID, 'LEFT JOIN');
//$criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumoInsEtiqueta::GEN_TABLA, InsInsumoInsEtiqueta::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsEtiqueta::GEN_TABLA, InsEtiqueta::GEN_ATTR_ID, InsInsumoInsEtiqueta::GEN_ATTR_INS_ETIQUETA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoZona::GEN_TABLA, GeoZona::GEN_ATTR_ID, CliCliente::GEN_ATTR_GEO_ZONA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralActividad::GEN_TABLA, GralActividad::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_ACTIVIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralEscenario::GEN_TABLA, GralEscenario::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_ESCENARIO_ID, 'LEFT JOIN');
//$criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClienteCliRubro::GEN_TABLA, CliClienteCliRubro::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliRubro::GEN_TABLA, CliRubro::GEN_ATTR_ID, CliClienteCliRubro::GEN_ATTR_CLI_RUBRO_ID, 'LEFT JOIN');

$criterio->setCriterios();
$vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
//Gral::prr($vta_orden_ventas);
//exit;

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

// -----------------------------------------------------------------------------
// se inicializa hoja
// -----------------------------------------------------------------------------
$xls->setActiveSheetIndex(0);
$xls->getActiveSheet()->setTitle('Datos');

// -----------------------------------------------------------------------------
// Cabecera
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$cols = array(
    $columna++ => array("ancho" => 15, "titulo" => "Fecha OV", "indice" => "fecha_ov"),
    $columna++ => array("ancho" => 10, "titulo" => "Id OV", "indice" => "id_ov"),
    $columna++ => array("ancho" => 16, "titulo" => "Codigo OV", "indice" => "codigo_ov"),
    $columna++ => array("ancho" => 15, "titulo" => "Fecha Presup", "indice" => "fecha_presupuesto"),
    $columna++ => array("ancho" => 15, "titulo" => "Codigo Presup", "indice" => "codigo_presupuesto"),
    $columna++ => array("ancho" => 18, "titulo" => "Cuit / DNI", "indice" => "cuit"),
    $columna++ => array("ancho" => 50, "titulo" => "Cliente", "indice" => "cliente"),
    $columna++ => array("ancho" => 30, "titulo" => "Cat Cliente", "indice" => "cat_cliente"),
    $columna++ => array("ancho" => 30, "titulo" => "Rubro", "indice" => "rubro"),
    $columna++ => array("ancho" => 30, "titulo" => "Localidad", "indice" => "localidad"),
    $columna++ => array("ancho" => 12, "titulo" => "Zona", "indice" => "zona"),
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'indice' => 'id'),
    $columna++ => array('ancho' => 16, 'titulo' => 'Cod Int', 'indice' => 'codigo_interno'),
    $columna++ => array("ancho" => 65, "titulo" => "Insumo", "indice" => "insumo"),
    $columna++ => array('ancho' => 70, 'titulo' => 'Categoria', 'indice' => 'categoria'),
    $columna++ => array("ancho" => 65, "titulo" => "Etiquetas", "indice" => "etiquetas"),
    $columna++ => array("ancho" => 20, "titulo" => "Marca", "indice" => "insumo"),
    $columna++ => array("ancho" => 20, "titulo" => "Cant OV", "indice" => "cantidad_remitida"),
    $columna++ => array("ancho" => 20, "titulo" => "Estado", "indice" => "estado"),
    $columna++ => array("ancho" => 25, "titulo" => "Estado Remision", "indice" => "estado_remision"),
    $columna++ => array("ancho" => 20, "titulo" => "Cant Remitida", "indice" => "cantidad_remitida"),
    $columna++ => array("ancho" => 25, "titulo" => "Estado Facturacion", "indice" => "estado_facturacion"),
    $columna++ => array("ancho" => 20, "titulo" => "Cant Facturada", "indice" => "cantidad_remitida"),
    $columna++ => array("ancho" => 30, "titulo" => "Tipo Lista", "indice" => "tipo_lista"),
    $columna++ => array("ancho" => 20, "titulo" => "Imp Unitario", "indice" => "importe_unitario"),
    $columna++ => array("ancho" => 20, "titulo" => "Imp Total", "indice" => "importe_total"),
    $columna++ => array("ancho" => 20, "titulo" => "Imp Total (IVA Inc)", "indice" => "importe_total_iva"),
    $columna++ => array("ancho" => 20, "titulo" => "Actividad", "indice" => "actividad"),
    $columna++ => array("ancho" => 20, "titulo" => "Escenario", "indice" => "escenario"),
    $columna++ => array("ancho" => 35, "titulo" => "Vendedor", "indice" => "vendedor"),
    $columna++ => array("ancho" => 20, "titulo" => "Sucursal", "indice" => "sucursal"),    
    $columna++ => array('ancho' => 50, 'titulo' => 'Proveedores', 'indice' => 'proveedor'),
);

$linea = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($cols as $i => $col) {
    $xls->getActiveSheet()->getStyle($i . $linea)->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($i . $linea)->getFont()->setBold(true);
    $xls->getActiveSheet()->getColumnDimension($i)->setWidth($col['ancho']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->getStartColor()->setARGB('666666');
    $xls->getActiveSheet()->setCellValue($i . $linea, $col['titulo']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($i . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
}

// -----------------------------------------------------------------------------
// se obtiene el valor de la ultima columna
// -----------------------------------------------------------------------------
$columna_ultima = array_pop(array_keys($cols));

foreach ($vta_orden_ventas as $vta_orden_venta) {

    $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
    $cli_cliente = $vta_presupuesto->getCliCliente();

    $codigo_orden_venta = $vta_orden_venta->getCodigo();
    $codigo_presupuesto = $vta_presupuesto->getCodigo();
    $cliente = $vta_orden_venta->getPersonaDescripcion();
    $cliente_cuit = $cli_cliente->getCuit();
    $ins_insumo = $vta_orden_venta->getInsInsumo();
    $ins_categoria = $ins_insumo->getInsCategoria();
    $ins_marca = $ins_insumo->getInsMarca();
    $ins_etiquetas = $ins_insumo->getInsEtiquetasXInsInsumoInsEtiqueta();
    $insumo_descripcion = $vta_orden_venta->getDescripcion();
    $estado = $vta_orden_venta->getVtaOrdenVentaTipoEstado()->getDescripcion();
    $estado_remision = $vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion();
    $estado_facturacion = $vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion();
    $tipo_lista = $vta_presupuesto->getInsTipoListaPrecio()->getDescripcion();
    $cantidad_ov = $vta_orden_venta->getCantidad();
    $importe_unitario = $vta_orden_venta->getImporteUnitarioConDescuento();
    $importe_total = $importe_unitario * $vta_orden_venta->getCantidad();
    $importe_total_con_iva = $vta_orden_venta->getImporteTotal();
        
    $cantidad_en_remito = $vta_orden_venta->getCantidadEnRemito();
    $cantidad_en_factura = $vta_orden_venta->getCantidadEnFactura();

    $gral_actividad_descripcion = $vta_presupuesto->getGralActividad()->getDescripcion();
    $gral_escenario_descripcion = $vta_presupuesto->getGralEscenario()->getDescripcion();
    $vta_vendedor_descripcion = $vta_presupuesto->getVtaVendedor()->getDescripcion();
    $gral_sucursal_descripcion = $vta_presupuesto->getGralSucursal()->getDescripcion();

    // -------------------------------------------
    // etiquetas
    // -------------------------------------------    
    $string_etiquetas = '';
    foreach ($ins_etiquetas as $ins_etiqueta) {
        $string_etiquetas .= $ins_etiqueta->getDescripcion();
        $string_etiquetas = html_entity_decode($string_etiquetas);
        $string_etiquetas = htmlspecialchars_decode($string_etiquetas);
        $string_etiquetas .= ' - ';
    }
    
    // -------------------------------------------
    // proveedores
    // -------------------------------------------    
    $prv_proveedors_descripcion        = '';
    $prv_proveedors = $ins_insumo->getPrvProveedorsXInsInsumoPrvProveedor();
    foreach($prv_proveedors as $prv_proveedor){
        $prv_proveedors_descripcion .= $prv_proveedor->getDescripcion();
        $prv_proveedors_descripcion .= Gral::REPORTES_SEPARADOR.' ';
    }

    // -------------------------------------------
    // rubros del cliente
    // -------------------------------------------    
    $cli_cliente_rubros        = '';
    $cli_rubros = $cli_cliente->getCliRubrosXCliClienteCliRubro();
    foreach($cli_rubros as $cli_rubro){
        $cli_cliente_rubros .= $cli_rubro->getDescripcion();
        $cli_cliente_rubros .= Gral::REPORTES_SEPARADOR.' ';
    }
    
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(DbExcel::getFechaToFormula($vta_orden_venta->getCreado()), PHPExcel_Cell_DataType::TYPE_FORMULA);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode('dd/mm/yyyy');
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_orden_venta->getId(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($codigo_orden_venta, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(DbExcel::getFechaToFormula($vta_presupuesto->getCreado()), PHPExcel_Cell_DataType::TYPE_FORMULA);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode('dd/mm/yyyy');
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($codigo_presupuesto, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cliente_cuit, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cliente, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getCliCategoria()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente_rubros, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getGeoLocalidad()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getGeoZona()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($ins_insumo->getId(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($ins_insumo->getCodigoInterno(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($insumo_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_categoria->getFamiliaDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($string_etiquetas, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_marca->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad_ov, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($estado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($estado_remision, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad_en_remito, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($estado_facturacion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad_en_factura, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($tipo_lista, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_unitario, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_total, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_total_con_iva, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($gral_actividad_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($gral_escenario_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_vendedor_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($gral_sucursal_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($prv_proveedors_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
}

// -----------------------------------------------------------------------------
//Inmovilizar filas y columnas
// -----------------------------------------------------------------------------
$xls->getActiveSheet()->freezePane(DB_XLS_CONFIG_PRIMER_COLUMNA.(DB_XLS_CONFIG_PRIMER_FILA + 1));

// -----------------------------------------------------------------------------
//Insertar filtros
// -----------------------------------------------------------------------------
$xls->getActiveSheet()->setAutoFilter(DB_XLS_CONFIG_PRIMER_COLUMNA.DB_XLS_CONFIG_PRIMER_FILA.':'.$columna_ultima.DB_XLS_CONFIG_PRIMER_FILA);

// -----------------------------------------------------------------------------
// Genera el archivo de salida
// -----------------------------------------------------------------------------
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . DbConfig::CONFIG_GRAL_CLIENTE_MIN.'-'. $db_nombre_pagina . '.xlsx"');
header('Cache-Control: max-age=0');

$oWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$oWriter->save('php://output');
exit;
?>