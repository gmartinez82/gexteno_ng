<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once 'control/seguridad.php';
include_once '_autoload.php';
require_once Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_XLS_CONFIG_ALTO_FILA', 22);
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 0);
define('DB_XLS_CONFIG_PRIMER_FILA', 1);
// ----------------------------------------------------------------------------

$criterio = new Criterio();
$criterio->addDistinct(true);
VtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);

if ($txt_filtro_desde != '') {
    $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_filtro_desde . ' 00:00:00', Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != '') {
    $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_filtro_hasta . ' 23:59:59', Criterio::MENORIGUAL);
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

if ($txt_filtro_codigo_interno != '') {
    $criterio->add(InsInsumo::GEN_ATTR_CODIGO_INTERNO, $txt_filtro_codigo_interno, Criterio::IGUAL);
}


if ($cmb_filtro_geo_localidad_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, $cmb_filtro_geo_localidad_id, Criterio::IGUAL);
}

if ($cmb_filtro_geo_zona_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_GEO_ZONA_ID, $cmb_filtro_geo_zona_id, Criterio::IGUAL);
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
    $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, $cmb_filtro_gral_sucursal_id, Criterio::IGUAL);
}

if ($cmb_filtro_ins_etiqueta_id != 0) {
    $criterio->add(InsEtiqueta::GEN_ATTR_ID, $cmb_filtro_ins_etiqueta_id, Criterio::IGUAL);
}

if ($cmb_filtro_ins_categoria_id != 0) {
    $criterio->add(InsCategoria::GEN_ATTR_ID, $cmb_filtro_ins_categoria_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_vendedor_id != 0){
    $criterio->add(VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_presupuesto_tipo_despacho_id != 0){
    $criterio->add(VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_DESPACHO_ID, $cmb_filtro_vta_presupuesto_tipo_despacho_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_sucursal_retiro != 0){
    $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_RETIRO, $cmb_filtro_gral_sucursal_retiro, Criterio::IGUAL);
}

if($cmb_filtro_vta_presupuesto_tipo_venta_id != 0){
    $criterio->add(VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_VENTA_ID, $cmb_filtro_vta_presupuesto_tipo_venta_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_presupuesto_tipo_emision_id != 0){
    $criterio->add(VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_EMISION_ID, $cmb_filtro_vta_presupuesto_tipo_emision_id, Criterio::IGUAL);
}

if ($cmb_filtro_geo_provincia_id != 0) {
    $criterio->add(GeoProvincia::GEN_ATTR_ID, $cmb_filtro_geo_provincia_id, Criterio::IGUAL);
}
if ($cmb_filtro_geo_localidad_id != 0) {
    $criterio->add(GeoLocalidad::GEN_ATTR_ID, $cmb_filtro_geo_localidad_id, Criterio::IGUAL);
}
if ($cmb_filtro_gral_ruta_id != 0) {
    $criterio->add(GralRuta::GEN_ATTR_ID, $cmb_filtro_gral_ruta_id, Criterio::IGUAL);
}
if ($cmb_filtro_prv_proveedor != 0) {
    $criterio->add(PrvProveedor::GEN_ATTR_ID, $cmb_filtro_prv_proveedor, Criterio::IGUAL);
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
//$criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
//$criterio->addRealJoin(GeoZona::GEN_TABLA, GeoZona::GEN_ATTR_ID, CliCliente::GEN_ATTR_GEO_ZONA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralActividad::GEN_TABLA, GralActividad::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_ACTIVIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralEscenario::GEN_TABLA, GralEscenario::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_ESCENARIO_ID, 'LEFT JOIN');
//$criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClienteCliRubro::GEN_TABLA, CliClienteCliRubro::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliRubro::GEN_TABLA, CliRubro::GEN_ATTR_ID, CliClienteCliRubro::GEN_ATTR_CLI_RUBRO_ID, 'LEFT JOIN');

$criterio->addRealJoin(CliCentroRecepcion::GEN_TABLA, CliCentroRecepcion::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoProvincia::GEN_TABLA, GeoProvincia::GEN_ATTR_ID, GeoLocalidad::GEN_ATTR_GEO_PROVINCIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, GeoLocalidad::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralRuta::GEN_TABLA, GralRuta::GEN_ATTR_ID, GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, 'LEFT JOIN');

$criterio->addRealJoin(InsInsumoPrvProveedor::GEN_TABLA, InsInsumoPrvProveedor::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, InsInsumoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, 'LEFT JOIN');

$criterio->setCriterios();

$vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
//Gral::prr($vta_orden_ventas);
//exit;

// -----------------------------------------------------------------------------
// se inicializa libro y se les da propiedades
// -----------------------------------------------------------------------------
$xls = new PHPExcel();
$xls->getProperties()->setCreator(Gral::getConfig("sistema_nombre"))
        ->setLastModifiedBy(Gral::getConfig("sistema_nombre"))
        ->setTitle(Gral::getConfig("sistema_nombre"))
        ->setSubject(Gral::getConfig("sistema_nombre"))
        ->setDescription(Gral::getConfig("sistema_nombre"))
        ->setKeywords(Gral::getConfig("sistema_nombre"))
        ->setCategory(Gral::getConfig("sistema_nombre"));

// -----------------------------------------------------------------------------
// se inicializa hoja/s
// -----------------------------------------------------------------------------
$xls->setActiveSheetIndex(0);
$xls->getActiveSheet()->setTitle('Datos');

// -----------------------------------------------------------------------------
// Cabeceras
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$arr_cabeceras = array(
    $columna++ => array('ancho' => 15, 'titulo' => 'Fecha OV', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 10, 'titulo' => 'Id OV', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 16, 'titulo' => 'Codigo OV', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 15, 'titulo' => 'Fecha Presup', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 15, 'titulo' => 'Codigo Presup', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 18, 'titulo' => 'Cuit / DNI', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 50, 'titulo' => 'Cliente', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 29, 'titulo' => 'Telefono', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 13, "titulo" => "Pais", 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 14, "titulo" => "Provincia", 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 26, "titulo" => "Localidad", 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 12, 'titulo' => 'Zona', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 20, "titulo" => "Condicion IVA", 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 30, 'titulo' => 'Cat Cliente', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 30, 'titulo' => 'Rubro', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 16, 'titulo' => 'Cod Int', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 65, 'titulo' => 'Insumo', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 70, 'titulo' => 'Categoria', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 65, 'titulo' => 'Etiquetas', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Marca', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cant OV', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Estado', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 25, 'titulo' => 'Estado Remision', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cant Remitida', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 25, 'titulo' => 'Estado Facturacion', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cant Facturada', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 30, 'titulo' => 'Tipo Lista', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Imp Unitario', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 20, 'titulo' => 'Imp Total', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 20, 'titulo' => 'Imp Total (IVA Inc)', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 18, 'titulo' => 'Costo Unitario', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 15, 'titulo' => 'Costo Total', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 16, 'titulo' => 'Margen (%)', 'formato' => DbExcel::FORMATO_PORCENTAJE),
    $columna++ => array('ancho' => 16, 'titulo' => 'Imp Margen', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 20, 'titulo' => 'Actividad', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 30, 'titulo' => 'Escenario', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 18, 'titulo' => 'Forma Pago', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 16, 'titulo' => 'Medio Pago', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 12, 'titulo' => 'Cuota', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 35, 'titulo' => 'Vendedor', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Sucursal', 'formato' => DbExcel::FORMATO_NINGUNO),    
    $columna++ => array('ancho' => 50, 'titulo' => 'Proveedores', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 30, 'titulo' => 'Tipo Despacho', 'indice' => 'tipo_despacho'),
    $columna++ => array("ancho" => 20, "titulo" => "Sucursal Retiro", "indice" => "sucursal"),
    $columna++ => array('ancho' => 30, 'titulo' => 'Tipo Venta', 'indice' => 'tipo_venta'),
    $columna++ => array('ancho' => 30, 'titulo' => 'Tipo Emision', 'indice' => 'tipo_emision'),
);

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// se instancia coleccion de objetos de extension multiple a utilizar dentro del foreach
// -----------------------------------------------------------------------------
$vta_orden_venta_importes = VtaOrdenVentaImporte::getVtaOrdenVentaImportesXVtaOrdenVentas($vta_orden_ventas);

// -----------------------------------------------------------------------------
// se instancian arrays de persistencia de objetos en busqueda en foreach
// -----------------------------------------------------------------------------
$arr_vta_presupuestos = array();
$arr_cli_clientes = array();
$arr_geo_localidads = array();
$arr_geo_provincias = array();

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
foreach ($vta_orden_ventas as $vta_orden_venta) {
    
    // -------------------------------------------------------------------------
    // Se instancia la tabla de resumen
    // -------------------------------------------------------------------------
    //$vta_orden_venta_importe = $vta_orden_venta->getResumenComprobante();
    $vta_orden_venta_importe = $vta_orden_venta->getResumenComprobanteFromArray($vta_orden_venta_importes);
    
    /*
    Metodología Vieja
    $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
    $cli_cliente = $vta_presupuesto->getCliCliente();
    $geo_localidad = $cli_cliente->getGeoLocalidad();
    $geo_provincia = $geo_localidad->getGeoProvincia();
    */
    
    // Metodología Nueva
    $vta_presupuesto = $vta_orden_venta->getVtaPresupuestoEnArray($arr_vta_presupuestos);
    $cli_cliente = $vta_presupuesto->getCliClienteEnArray($arr_cli_clientes);
    $geo_localidad = $cli_cliente->getGeoLocalidadEnArray($arr_geo_localidads);
    $geo_provincia = $geo_localidad->getGeoProvinciaEnArray($arr_geo_provincias);
    
    $geo_pais = $geo_provincia->getGeoPais();
    $ins_insumo = $vta_orden_venta->getInsInsumo();
    $cantidad_ov = $vta_orden_venta->getCantidad();
    $importe_unitario = $vta_orden_venta->getImporteUnitarioConDescuento();
    $importe_total = $importe_unitario * $cantidad_ov;
    $importe_costo_unitario = $vta_orden_venta->getImporteCosto();
    $importe_costo_total = $importe_costo_unitario * $cantidad_ov;
    
    // -------------------------------------------
    // rubros del cliente
    // -------------------------------------------    
    if($cli_cliente->getId() != ""){
        $cli_cliente_rubros        = '';
        $cli_rubros = $cli_cliente->getCliRubrosXCliClienteCliRubro();
        foreach($cli_rubros as $cli_rubro){
            $cli_cliente_rubros .= $cli_rubro->getDescripcion();
            $cli_cliente_rubros .= Gral::REPORTES_SEPARADOR.' ';
        }
    }

    // -------------------------------------------
    // etiquetas
    // -------------------------------------------    
    $string_etiquetas = '';
    $ins_etiquetas = $ins_insumo->getInsEtiquetasXInsInsumoInsEtiqueta();
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
    
    $fila++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    $valor = DbExcel::getFechaToFormula($vta_orden_venta->getCreado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = $vta_orden_venta->getId();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_orden_venta->getCodigo();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = DbExcel::getFechaToFormula($vta_presupuesto->getCreado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = $vta_presupuesto->getCodigo();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    if($cli_cliente->getId() != ""){
        $valor = $cli_cliente->getCuit();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $vta_orden_venta->getPersonaDescripcion();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $cli_cliente->getTelefono();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $geo_pais->getDescripcion();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $geo_provincia->getDescripcion();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $geo_localidad->getDescripcion();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $cli_cliente->getGeoZona()->getDescripcion();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $cli_cliente->getGralCondicionIva()->getDescripcion();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $cli_cliente->getCliCategoria()->getDescripcion();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $cli_cliente_rubros;
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;
    
    }else{
        $columna++;
        $valor = $vta_orden_venta->getPersonaDescripcion();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;
        $columna++;
        $columna++;
        $columna++;
        $columna++;
        $columna++;
        $columna++;
        $columna++;  
        $columna++;  
    }
        
    $valor = $ins_insumo->getId();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $ins_insumo->getCodigoInterno();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_orden_venta->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $ins_insumo->getInsCategoria()->getFamiliaDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $string_etiquetas;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $ins_insumo->getInsMarca()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cantidad_ov;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_orden_venta->getVtaOrdenVentaTipoEstado()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_orden_venta->getCantidadEnRemito();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_orden_venta->getCantidadEnFactura();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_presupuesto->getInsTipoListaPrecio()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $importe_unitario;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $importe_total;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_orden_venta_importe->getImporteTotal();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $importe_costo_unitario;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $importe_costo_total;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_orden_venta->getMargenAplicadoDecimal();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $importe_total - $importe_costo_total;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_presupuesto->getGralActividad()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_presupuesto->getGralEscenario()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_presupuesto->getGralFpFormaPago()->getDescripcion();
    //$valor = $vta_presupuesto->getGralFpCuota()->getGralFpMedioPago()->getGralFpFormaPago()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_presupuesto->getGralFpCuota()->getGralFpMedioPago()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_presupuesto->getGralFpCuota()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_presupuesto->getVtaVendedor()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_presupuesto->getGralSucursal()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $prv_proveedors_descripcion;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = $vta_presupuesto->getVtaPresupuestoTipoDespacho()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = $vta_presupuesto->getGralSucursalRetiroObj()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = $vta_presupuesto->getVtaPresupuestoTipoVenta()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = $vta_presupuesto->getVtaPresupuestoTipoEmision()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Estilo y Formato
// -----------------------------------------------------------------------------
DbExcel::getEstiloMasivo($xls, $borde_style, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_XLS_CONFIG_ALTO_FILA);
DbExcel::getEstiloPersonalizado($xls, $arr_cabeceras, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_COLOR_ESTANDAR_FONDO_CABECERA, DB_COLOR_ESTANDAR_LETRA_CABECERA);

// -----------------------------------------------------------------------------
// Insertar filtros
// -----------------------------------------------------------------------------
$ultima_columna = PHPExcel_Cell::stringFromColumnIndex($columna);
$primer_columna = PHPExcel_Cell::stringFromColumnIndex(DB_XLS_CONFIG_PRIMER_COLUMNA);
$xls->getActiveSheet()->setAutoFilter($primer_columna.DB_XLS_CONFIG_PRIMER_FILA.':'.$ultima_columna.DB_XLS_CONFIG_PRIMER_FILA);

// -----------------------------------------------------------------------------
// Inmovilizar filas y columnas
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$columna_letra = PHPExcel_Cell::stringFromColumnIndex($columna);
$xls->getActiveSheet()->freezePane($columna_letra.(DB_XLS_CONFIG_PRIMER_FILA + 1));

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