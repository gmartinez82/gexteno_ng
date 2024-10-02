<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once 'control/seguridad.php';
include_once '_autoload.php';

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------

//ACLARACIONES:
//1° Las constantes "ALTO_FILA" y "CANTIDAD_FILAS_RANKING" son INDEPENDIENTES a las demas.  
//2° Las constantes "PRIMER_FILA_ESTATICA_NUMERICA" y "PRIMER_FILA_ESTATICA" siempre tienen que ser IGUALES.
//3° Las constantes "PRIMER_COLUMNA_ESTATICA" y "COLUMNA_DATOS_FECHA" siempre tienen que ser IGUALES.
//4° La constante "CABECERA_COLUMNA_VENTAS" siempre debe ser una LETRA+1 que "COLUMNA_DATOS_FECHA".       
//5° La constante "CABECERA_FILA_VENTAS" siempre debe ser un NUMERO+8 que "PRIMER_FILA_ESTATICA".
//6° Las constantes "CABECERA_FILA_VENTAS" y "CABECERA_FILA_RANKING" siempre tienen que ser IGUALES. 
//7° La constante "CARGA_FILA_VENTAS" siempre debe ser un NUMERO+1 que "CABECERA_FILA_RANKING".   

define('DB_XLS_CONFIG_ALTO_FILA', 17);
define('DB_XLS_CONFIG_CANTIDAD_FILAS_RANKING', 10);

define('DB_XLS_CONFIG_PRIMER_FILA_ESTATICA_NUMERICA', 1);
define('DB_XLS_CONFIG_PRIMER_FILA_ESTATICA', '1');
define('DB_XLS_CONFIG_PRIMER_COLUMNA_ESTATICA', 'A');
define('DB_XLS_CONFIG_COLUMNA_DATOS_FECHA', 'A');

define('DB_XLS_CONFIG_CABECERA_COLUMNA_VENTAS', 'B');
define('DB_XLS_CONFIG_CABECERA_FILA_VENTAS', '9');
define('DB_XLS_CONFIG_CABECERA_FILA_RANKING', 9);
define('DB_XLS_CONFIG_CARGA_FILA_VENTAS', 10);
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

if ($cmb_filtro_gral_sucursal_id != 0) {
    $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, $cmb_filtro_gral_sucursal_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add(VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}

if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_ins_etiqueta_id != 0) {
    $criterio->add(InsEtiqueta::GEN_ATTR_ID, $cmb_filtro_ins_etiqueta_id, Criterio::IGUAL);
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
$criterio->addOrden(VtaOrdenVenta::GEN_ATTR_CREADO, Criterio::_ASC);

$criterio->setCriterios();
$vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
//Gral::prr($vta_orden_ventas);
//exit;

// creo array de resumen tipo listas
$lista_precio_columna = DB_XLS_CONFIG_CABECERA_COLUMNA_VENTAS;
$ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios(null, null, true);
foreach($ins_tipo_lista_precios as $ins_tipo_lista_precio){
    $arr_resumen_tipo_listas[$ins_tipo_lista_precio->getCodigo()]['descripcion'] = $ins_tipo_lista_precio->getDescripcionCorta();
    $arr_resumen_tipo_listas[$ins_tipo_lista_precio->getCodigo()]['columna'] = $lista_precio_columna;    
    $lista_precio_columna++;
}

foreach ($vta_orden_ventas as $vta_orden_venta) {
    $fecha = substr($vta_orden_venta->getCreado(), 0, 10);
    $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
    $ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();
    $importe_total_con_iva = $vta_orden_venta->getImporteTotal();

    // creo array de resumen fechas
    $arr_resumen_fechas['POR_FECHA'][$fecha][$ins_tipo_lista_precio->getCodigo()]['importe_total'] += $importe_total_con_iva;
    $arr_resumen_fechas['POR_FECHA'][$fecha]['TOTAL_POR_FECHA']['importe_total'] += $importe_total_con_iva;
    $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()][$fecha]['importe_total'] += $importe_total_con_iva;
    $arr_resumen_fechas['POR_LISTA_PRECIO'][$ins_tipo_lista_precio->getCodigo()]['TOTAL_POR_TIPO_LISTA']['importe_total'] += $importe_total_con_iva;

    // creo array de resumen ranking productos
    $ins_insumo = $vta_orden_venta->getInsInsumo();
    $arr_resumen_ranking_productos[$ins_insumo->getId()]['descripcion'] = $ins_insumo->getDescripcion();
    $arr_resumen_ranking_productos[$ins_insumo->getId()]['ventas'] ++;
    $arr_resumen_ranking_productos[$ins_insumo->getId()]['unidades'] += $vta_orden_venta->getCantidad();
    $arr_resumen_ranking_productos[$ins_insumo->getId()]['importe_total'] += $importe_total_con_iva;

    // creo array de resumen ranking clientes
    $cli_cliente = $vta_presupuesto->getCliCliente();
    if($cli_cliente->getId() == 'null'){
        $arr_resumen_ranking_clientes[$cli_cliente->getId()]['descripcion'] = VtaPresupuesto::TEXTO_CONSUMIDOR_FINAL;
    }else{
        $arr_resumen_ranking_clientes[$cli_cliente->getId()]['descripcion'] = $cli_cliente->getDescripcion();
    }
    $arr_resumen_ranking_clientes[$cli_cliente->getId()]['ventas'] ++;
    $arr_resumen_ranking_clientes[$cli_cliente->getId()]['unidades'] = '';
    $arr_resumen_ranking_clientes[$cli_cliente->getId()]['importe_total'] += $importe_total_con_iva;
    
    // creo array de resumen ranking clientes sin compras
//    if (no tiene ordenes de ventas - osea por otra clase ingresar) {
//        $arr_resumen_ranking_clientes_sin_compras[$cli_cliente->getId()]['descripcion'] = $cli_cliente->getDescripcion();
//        $arr_resumen_ranking_clientes_sin_compras[$cli_cliente->getId()]['ventas'] ++;
//        $arr_resumen_ranking_clientes_sin_compras[$cli_cliente->getId()]['unidades'] = '';
//        $arr_resumen_ranking_clientes_sin_compras[$cli_cliente->getId()]['importe_total'] += $importe_total_con_iva;
//    }
}

usort($arr_resumen_ranking_productos, 'ordenarRanking');
$arr_resumen_ranking_productos = array_slice($arr_resumen_ranking_productos, 0, DB_XLS_CONFIG_CANTIDAD_FILAS_RANKING);
usort($arr_resumen_ranking_clientes, 'ordenarRanking');
$arr_resumen_ranking_clientes = array_slice($arr_resumen_ranking_clientes, 0, DB_XLS_CONFIG_CANTIDAD_FILAS_RANKING);

//Gral::prr($arr_resumen_tipo_listas);
//Gral::prr($arr_resumen_fechas);
//Gral::prr($arr_resumen_ranking_productos);
//Gral::prr($arr_resumen_ranking_clientes);
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
// 1° SECCION (valores estaticos)
// -----------------------------------------------------------------------------

// Cabeceras Estaticas
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA_ESTATICA;
$fila = DB_XLS_CONFIG_PRIMER_FILA_ESTATICA;
$cont = DB_XLS_CONFIG_PRIMER_FILA_ESTATICA_NUMERICA;
$arr_titulos_estaticos = array(
    $columna.$fila => array("titulo" => "Desde", "columna" => $columna, "fila" => $cont, "ancho" => 15),
    $columna.++$fila => array("titulo" => "Hasta", "columna" => $columna, "fila" => ++$cont, "ancho" => 15),
    $columna.++$fila => array("titulo" => "Sucursal", "columna" => $columna, "fila" => ++$cont, "ancho" => 15),
    $columna.++$fila => array("titulo" => "Vendedor", "columna" => $columna, "fila" => ++$cont, "ancho" => 15),
    $columna.++$fila => array("titulo" => "Cliente", "columna" => $columna, "fila" => ++$cont, "ancho" => 15),
    $columna.++$fila => array("titulo" => "Etiqueta", "columna" => $columna, "fila" => ++$cont, "ancho" => 15),
    $columna.DB_XLS_CONFIG_CABECERA_FILA_VENTAS => array("titulo" => "Fecha", "columna" => $columna, "fila" => DB_XLS_CONFIG_CARGA_FILA_VENTAS-1, "ancho" => 15),
);

foreach ($arr_titulos_estaticos as $rango => $arr_titulos_estatico) {
    DbExcel::estiloCabecera($xls, $borde_style, $rango, $arr_titulos_estatico['columna'], $arr_titulos_estatico['fila'], $arr_titulos_estatico['titulo'], '666666', PHPExcel_Style_Color::COLOR_WHITE, $arr_titulos_estatico['ancho'], DB_XLS_CONFIG_ALTO_FILA);
}

// se cargan los valores estaticos y se combinan
$columna++;
$gral_sucursal = GralSucursal::getOxId($cmb_filtro_gral_sucursal_id);
$vta_vendedor = VtaVendedor::getOxId($cmb_filtro_vta_vendedor_id);
$cli_cliente = CliCliente::getOxId($cmb_filtro_cli_cliente_id);
$ins_etiqueta = InsEtiqueta::getOxId($cmb_filtro_ins_etiqueta_id);

$fila = DB_XLS_CONFIG_PRIMER_FILA_ESTATICA;
$cont = DB_XLS_CONFIG_PRIMER_FILA_ESTATICA_NUMERICA;
$arr_valores_estaticos = array(
    $columna.$fila => array("titulo" => "Fecha Desde", "columna" => $columna, "fila" => $cont, "valor" => Gral::getFechaToWeb($txt_filtro_desde)),
    $columna.++$fila => array("titulo" => "Fecha Hasta", "columna" => $columna, "fila" => ++$cont, "valor" => Gral::getFechaToWeb($txt_filtro_hasta)),
    $columna.++$fila => array("titulo" => "Sucursal", "columna" => $columna, "fila" => ++$cont, "valor" => ($gral_sucursal) ? $gral_sucursal->getDescripcion() : '-'),
    $columna.++$fila => array("titulo" => "Vendedor", "columna" => $columna, "fila" => ++$cont, "valor" => ($vta_vendedor) ? $vta_vendedor->getDescripcion() : '-'),
    $columna.++$fila => array("titulo" => "Cliente", "columna" => $columna, "fila" => ++$cont, "valor" => ($cli_cliente) ? $cli_cliente->getDescripcion() : '-'),
    $columna.++$fila => array("titulo" => "Etiqueta", "columna" => $columna, "fila" => ++$cont, "valor" => ($ins_etiqueta) ? $ins_etiqueta->getDescripcion() : '-'),
);

// Obtener ultima columna
$columna_totalizador = '';
foreach ($arr_resumen_tipo_listas as $arr_resumen_tipo_lista) {
    $columna_totalizador = $arr_resumen_tipo_lista['columna'];
}
$columna_totalizador++;

foreach ($arr_valores_estaticos as $rango => $arr_valores_estatico) {
    $primer_columna = $arr_valores_estatico['columna'];;
    $primer_fila = $arr_valores_estatico['fila'];
    $ultima_fila = $arr_valores_estatico['fila'];
    $primer_celda =$primer_columna.$primer_fila;
    $rango_combinacion =$primer_celda.':'.$columna_totalizador.$ultima_fila;  
    $xls->setActiveSheetIndex(0)->mergeCells($rango_combinacion);
    $xls->getActiveSheet()->getStyle($rango_combinacion)->applyFromArray($borde_style);
    DbExcel::estiloCelda($xls, $borde_style, $rango, $arr_valores_estatico['fila'], 'FFFFFF', DB_XLS_CONFIG_ALTO_FILA);
    $xls->getActiveSheet()->getCell($rango)->setValueExplicit($arr_valores_estatico['valor'], PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
}

// -----------------------------------------------------------------------------
// 2° SECCION (matriz de resumen de ventas)
// -----------------------------------------------------------------------------

// Combinar Cabecera Resumen de Ventas
$primer_columna = DB_XLS_CONFIG_COLUMNA_DATOS_FECHA;
$primer_fila = DB_XLS_CONFIG_CABECERA_FILA_VENTAS - 1;
$ultima_columna = $columna_totalizador;
$ultima_fila = DB_XLS_CONFIG_CABECERA_FILA_VENTAS - 1;
$primer_celda = $primer_columna . $primer_fila;
$rango_combinacion = $primer_celda . ':' . $ultima_columna . $ultima_fila;
DbExcel::estiloCeldaCombinada($xls, $borde_style, $primer_celda, $rango_combinacion, $primer_columna, $primer_fila, 'Resumen de Ventas', '666666', PHPExcel_Style_Color::COLOR_WHITE, 15, DB_XLS_CONFIG_ALTO_FILA);
$xls->getActiveSheet()->getStyle($rango_combinacion)->applyFromArray($borde_style);

// Cabeceras Dinamicas
$linea = DB_XLS_CONFIG_CABECERA_FILA_VENTAS;
foreach ($arr_resumen_tipo_listas as $arr_resumen_tipo_lista) {
    $rango = $arr_resumen_tipo_lista['columna'] . $linea;
    DbExcel::estiloCabecera($xls, $borde_style, $rango, $arr_resumen_tipo_lista['columna'], $linea, $arr_resumen_tipo_lista['descripcion'], '666666', PHPExcel_Style_Color::COLOR_WHITE, 15, DB_XLS_CONFIG_ALTO_FILA);
}
    
// Cabecera Total Fecha (Totalizador Vertical)
$rango = $columna_totalizador . DB_XLS_CONFIG_CABECERA_FILA_VENTAS;
DbExcel::estiloCabecera($xls, $borde_style, $rango, $columna_totalizador, 6, 'Total', '666666', PHPExcel_Style_Color::COLOR_WHITE, 15, DB_XLS_CONFIG_ALTO_FILA);

// se arma la matriz de resumen de ventas
$linea = DB_XLS_CONFIG_CARGA_FILA_VENTAS;
$arr_fechas = Date::getArrayFechasXRango($txt_filtro_desde, $txt_filtro_hasta);
foreach ($arr_fechas as $codigo_fecha => $fecha) {

    $rango = DB_XLS_CONFIG_COLUMNA_DATOS_FECHA . $linea;
    DbExcel::estiloCelda($xls, $borde_style, $rango, $linea, 'FFFFFF', DB_XLS_CONFIG_ALTO_FILA);
    $xls->getActiveSheet()->getCell($rango)->setValueExplicit(Gral::getFechaToWeb($fecha, 'INCLUIR_DIA_NOMBRE'), PHPExcel_Cell_DataType::TYPE_STRING);

    foreach ($arr_resumen_tipo_listas as $codigo_resumen_lista_precio => $arr_resumen_tipo_lista) {
        // Datos por fecha 
        $importe = $arr_resumen_fechas['POR_FECHA'][$codigo_fecha][$codigo_resumen_lista_precio]['importe_total'];
        $rango_celda = $arr_resumen_tipo_lista['columna'] . $linea;
        DbExcel::estiloCelda($xls, $borde_style, $rango_celda, $linea, 'FFFFFF', DB_XLS_CONFIG_ALTO_FILA);
        $xls->getActiveSheet()->getCell($rango_celda)->setValueExplicit($importe, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($rango_celda)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($rango_celda)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

        // Totalizador por fecha 
        $importe = $arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total'];
        $rango_celda = $columna_totalizador . $linea;
        DbExcel::estiloCabecera($xls, $borde_style, $rango_celda, $columna_totalizador, $linea, $importe, '666666', PHPExcel_Style_Color::COLOR_WHITE, 15, DB_XLS_CONFIG_ALTO_FILA);
        $xls->getActiveSheet()->getCell($rango_celda)->setValueExplicit($importe, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($rango_celda)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($rango_celda)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    }
    $linea++;
}

// Cabecera Total Tipo Lista Precio (Totalizador Horizontal) y Datos
$total = 0;
$rango = DB_XLS_CONFIG_COLUMNA_DATOS_FECHA . $linea;
DbExcel::estiloCabecera($xls, $borde_style, $rango, DB_XLS_CONFIG_COLUMNA_DATOS_FECHA, $linea, 'Total', '666666', PHPExcel_Style_Color::COLOR_WHITE, 15, DB_XLS_CONFIG_ALTO_FILA);

// Totalizador por tipo lista precio
foreach ($arr_resumen_tipo_listas as $codigo_resumen_lista_precio => $arr_resumen_tipo_lista) {
    $importe = $arr_resumen_fechas['POR_LISTA_PRECIO'][$codigo_resumen_lista_precio]['TOTAL_POR_TIPO_LISTA']['importe_total'];
    $rango = $arr_resumen_tipo_lista['columna'] . $linea;
    DbExcel::estiloCabecera($xls, $borde_style, $rango, $arr_resumen_tipo_lista['columna'], $linea, $importe, '666666', PHPExcel_Style_Color::COLOR_WHITE, 15, DB_XLS_CONFIG_ALTO_FILA);
    $xls->getActiveSheet()->getCell($arr_resumen_tipo_lista['columna'] . $linea)->setValueExplicit($importe, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($arr_resumen_tipo_lista['columna'] . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($arr_resumen_tipo_lista['columna'] . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $total = $total + $importe;
}
$rango = $columna_totalizador . $linea;
DbExcel::estiloCabecera($xls, $borde_style, $rango, $columna_totalizador, $linea, $total, '666666', PHPExcel_Style_Color::COLOR_WHITE, 15, DB_XLS_CONFIG_ALTO_FILA);
$xls->getActiveSheet()->getCell($columna_totalizador . $linea)->setValueExplicit($total, PHPExcel_Cell_DataType::TYPE_NUMERIC);
$xls->getActiveSheet()->getStyle($columna_totalizador . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
$xls->getActiveSheet()->getStyle($columna_totalizador . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

// -----------------------------------------------------------------------------
// 3° SECCION (matriz de Ranking de Productos mas Vendidos)
// -----------------------------------------------------------------------------

// Cabeceras Dinamicas
$columna_totalizador++;
$columna_totalizador++;
$primer_columna_rankings = $columna_totalizador;

$columna = $columna_totalizador;
$fila = DB_XLS_CONFIG_CABECERA_FILA_VENTAS;
$fila_numerica = DB_XLS_CONFIG_CABECERA_FILA_RANKING;
$arr_titulos_rankings = getArrTitulosRankings($columna, $fila, $fila_numerica);

foreach ($arr_titulos_rankings as $rango => $arr_titulos_ranking) {
    DbExcel::estiloCabecera($xls, $borde_style, $rango, $arr_titulos_ranking['columna'], $arr_titulos_ranking['fila'], $arr_titulos_ranking['titulo'], '666666', PHPExcel_Style_Color::COLOR_WHITE, $arr_titulos_ranking['ancho'], DB_XLS_CONFIG_ALTO_FILA);
    $columna_totalizador = $arr_titulos_ranking['columna'];
}

// Combinar Cabecera
$titulo = 'Ranking de Productos mas Vendidos';
combinarCabecerasRankings($xls, $borde_style, $primer_columna_rankings, $columna_totalizador, $fila_numerica, $titulo);

// se arma la matriz de resumen
$linea = DB_XLS_CONFIG_CARGA_FILA_VENTAS;
$linea = cargarDatosRankings($xls, $borde_style, $arr_resumen_ranking_productos, $primer_columna_rankings, $linea);

// -----------------------------------------------------------------------------
// 4° SECCION (matriz de Ranking de Clientes con mas Ventas)
// -----------------------------------------------------------------------------

// Cabeceras Dinamicas
$linea++;
$linea++;
$columna = $primer_columna_rankings;
$fila = ''. $linea .'';
$fila_numerica = $linea;
$arr_titulos_rankings = getArrTitulosRankings($columna, $fila, $fila_numerica);

foreach ($arr_titulos_rankings as $rango => $arr_titulos_ranking) {
    DbExcel::estiloCabecera($xls, $borde_style, $rango, $arr_titulos_ranking['columna'], $arr_titulos_ranking['fila'], $arr_titulos_ranking['titulo'], '666666', PHPExcel_Style_Color::COLOR_WHITE, $arr_titulos_ranking['ancho'], DB_XLS_CONFIG_ALTO_FILA);
    $columna_totalizador = $arr_titulos_ranking['columna'];
}

// Combinar Cabecera
$titulo = 'Ranking de Clientes con mas Ventas';
combinarCabecerasRankings($xls, $borde_style, $primer_columna_rankings, $columna_totalizador, $fila_numerica, $titulo);

// se arma la matriz de resumen
$linea++;
$linea = cargarDatosRankings($xls, $borde_style, $arr_resumen_ranking_clientes, $primer_columna_rankings, $linea);

// -----------------------------------------------------------------------------
// 5° SECCION (matriz de Ranking de Hardcodeadas)
// -----------------------------------------------------------------------------

// Cabeceras Dinamicas
$linea++;
$linea++;
$columna = $primer_columna_rankings;
$fila = ''. $linea .'';
$fila_numerica = $linea;
$arr_titulos_rankings = getArrTitulosRankings($columna, $fila, $fila_numerica);

foreach ($arr_titulos_rankings as $rango => $arr_titulos_ranking) {
    DbExcel::estiloCabecera($xls, $borde_style, $rango, $arr_titulos_ranking['columna'], $arr_titulos_ranking['fila'], $arr_titulos_ranking['titulo'], '666666', PHPExcel_Style_Color::COLOR_WHITE, $arr_titulos_ranking['ancho'], DB_XLS_CONFIG_ALTO_FILA);
    $columna_totalizador = $arr_titulos_ranking['columna'];
}

// Combinar Cabecera
$titulo = 'Ranking de Productos Con Stock y Sin Ventas';
combinarCabecerasRankings($xls, $borde_style, $primer_columna_rankings, $columna_totalizador, $fila_numerica, $titulo);

// se arma la matriz hardcodeada
$linea++;
$rango_combinacion = 'G'.$linea.':'.'K'.$linea;
$xls->setActiveSheetIndex(0)->mergeCells($rango_combinacion);
$xls->getActiveSheet()->getStyle($rango_combinacion)->applyFromArray($borde_style);
$xls->getActiveSheet()->getCell('G'.$linea)->setValueExplicit('En breve estara disponible.', PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('G'.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

// Cabeceras Dinamicas
$linea++;
$linea++;
$linea++;
$columna = $primer_columna_rankings;
$fila = ''. $linea .'';
$fila_numerica = $linea;
$arr_titulos_rankings = getArrTitulosRankings($columna, $fila, $fila_numerica);

foreach ($arr_titulos_rankings as $rango => $arr_titulos_ranking) {
    DbExcel::estiloCabecera($xls, $borde_style, $rango, $arr_titulos_ranking['columna'], $arr_titulos_ranking['fila'], $arr_titulos_ranking['titulo'], '666666', PHPExcel_Style_Color::COLOR_WHITE, $arr_titulos_ranking['ancho'], DB_XLS_CONFIG_ALTO_FILA);
    $columna_totalizador = $arr_titulos_ranking['columna'];
}

// Combinar Cabecera
$titulo = 'Ranking de Clientes Sin Ventas';
combinarCabecerasRankings($xls, $borde_style, $primer_columna_rankings, $columna_totalizador, $fila_numerica, $titulo);

// se arma la matriz hardcodeada
$linea++;
$rango_combinacion = 'G'.$linea.':'.'K'.$linea;
$xls->setActiveSheetIndex(0)->mergeCells($rango_combinacion);
$xls->getActiveSheet()->getStyle($rango_combinacion)->applyFromArray($borde_style);
$xls->getActiveSheet()->getCell('G'.$linea)->setValueExplicit('En breve estara disponible.', PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->getStyle('G'.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

// -----------------------------------------------------------------------------
// Genera el archivo de salida
// -----------------------------------------------------------------------------
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . DbConfig::CONFIG_GRAL_CLIENTE_MIN . '-' . $db_nombre_pagina . '.xlsx"');
header('Cache-Control: max-age=0');

$oWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$oWriter->save('php://output');
exit;

function ordenarRanking($arr, $arr_2) {
    return ($arr['cantidad'] < $arr_2['cantidad']) ? 1 : -1;
}

function getArrTitulosRankings($columna, $fila, $fila_numerica) {

    $arr_titulos_estaticos = array(
        $columna.$fila => array("titulo" => "#", "columna" => $columna, "fila" => $fila_numerica, "ancho" => 5),
        ++$columna.$fila => array("titulo" => "Descripcion", "columna" => $columna, "fila" => $fila_numerica, "ancho" => 53),
        ++$columna.$fila => array("titulo" => "Ventas", "columna" => $columna, "fila" => $fila_numerica, "ancho" => 9),
        ++$columna.$fila => array("titulo" => "Unidades", "columna" => $columna, "fila" => $fila_numerica, "ancho" => 9),
        ++$columna.$fila => array("titulo" => "Importe", "columna" => $columna, "fila" => $fila_numerica, "ancho" => 13),
    );

    //Gral::prr($arr_resumen);
    return $arr_titulos_estaticos;
}

function combinarCabecerasRankings($xls, $borde_style, $primer_columna_rankings, $columna_totalizador, $fila_numerica, $titulo) {
    $primer_columna = $primer_columna_rankings;
    $primer_fila = $fila_numerica - 1;
    $ultima_columna = $columna_totalizador;
    $ultima_fila = $fila_numerica - 1;
    $primer_celda = $primer_columna . $primer_fila;
    $rango_combinacion = $primer_celda . ':' . $ultima_columna . $ultima_fila;
    DbExcel::estiloCeldaCombinada($xls, $borde_style, $primer_celda, $rango_combinacion, $primer_columna, $primer_fila, $titulo, '666666', PHPExcel_Style_Color::COLOR_WHITE, 5, DB_XLS_CONFIG_ALTO_FILA);
    $xls->getActiveSheet()->getStyle($rango_combinacion)->applyFromArray($borde_style);
}

function cargarDatosRankings($xls, $borde_style, $arr_resumen_rankings, $primer_columna_rankings, $linea) {
    $cont = 1;
    foreach ($arr_resumen_rankings as $codigo => $arr_resumen_ranking) {
        $columna = $primer_columna_rankings;

        $rango = $columna . $linea;
        DbExcel::estiloCelda($xls, $borde_style, $rango, $linea, 'FFFFFF', DB_XLS_CONFIG_ALTO_FILA);
        $xls->getActiveSheet()->getCell($rango)->setValueExplicit($cont, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;
        $rango = $columna . $linea;
        DbExcel::estiloCelda($xls, $borde_style, $rango, $linea, 'FFFFFF', DB_XLS_CONFIG_ALTO_FILA);
        $xls->getActiveSheet()->getCell($rango)->setValueExplicit($arr_resumen_ranking['descripcion'], PHPExcel_Cell_DataType::TYPE_STRING);
        $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $columna++;
        $rango = $columna . $linea;
        DbExcel::estiloCelda($xls, $borde_style, $rango, $linea, 'FFFFFF', DB_XLS_CONFIG_ALTO_FILA);
        $xls->getActiveSheet()->getCell($rango)->setValueExplicit($arr_resumen_ranking['ventas'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;
        $rango = $columna . $linea;
        DbExcel::estiloCelda($xls, $borde_style, $rango, $linea, 'FFFFFF', DB_XLS_CONFIG_ALTO_FILA);
        $xls->getActiveSheet()->getCell($rango)->setValueExplicit($arr_resumen_ranking['unidades'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;
        $rango = $columna . $linea;
        DbExcel::estiloCelda($xls, $borde_style, $rango, $linea, 'FFFFFF', DB_XLS_CONFIG_ALTO_FILA);
        $xls->getActiveSheet()->getCell($rango)->setValueExplicit($arr_resumen_ranking['importe_total'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($rango)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

        $cont++;
        $linea++;
    }
    return $linea;
}

?>