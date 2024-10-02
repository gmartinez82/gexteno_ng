<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once 'control/seguridad.php';
include_once '_autoload.php';
require_once Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';

// -----------------------------------------------------------------------------
// constantes de configuracion
// -----------------------------------------------------------------------------
define('DB_XLS_CONFIG_ALTO_FILA', 22);
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 0);
define('DB_XLS_CONFIG_FILA_CABECERA_ESTATICA', 1);
define('DB_XLS_CONFIG_PRIMER_FILA', 2);
// -----------------------------------------------------------------------------

// -----------------------------------------------------------------------------
// inicializacion de variables
// -----------------------------------------------------------------------------
$cantidad_meses_cerrados = 6;
$primer_columna_meses_ventas_cantidad = 0;
$primer_columna_meses_ventas_importe = 0;
$primer_columna_meses_ventas_totales = 0;
$ultima_columna_meses_ventas_totales = 0;

// -----------------------------------------------------------------------------
// Consulta BD Primaria
// -----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);

if ($txt_descripcion != '') {
    $criterio->add(CliCliente::GEN_ATTR_DESCRIPCION, $txt_descripcion, Criterio::LIKE);
}

if ($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL) {
    if ($cmb_gral_sucursal_id != 0) {
        $criterio->add(GralSucursal::GEN_ATTR_ID, $cmb_gral_sucursal_id, Criterio::IGUAL);
    }     
}elseif($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR){
    if ($cmb_vta_vendedor_id != 0) {
        $criterio->add(VtaVendedor::GEN_ATTR_ID, $cmb_vta_vendedor_id, Criterio::IGUAL);
    }
}

if ($cmb_cli_categoria_id != 0) {
    $criterio->add(CliCategoria::GEN_ATTR_CLI_CATEGORIA_ID, $cmb_cli_categoria_id, Criterio::IGUAL);
}
if ($cmb_cli_estado != -1) { // solo opcion SI habilitada
    $criterio->add(CliCliente::GEN_ATTR_ESTADO, $cmb_cli_estado, Criterio::IGUAL);
}
if ($txt_creado_desde != '') {
    $criterio->add(CliCliente::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_creado_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_creado_hasta != '') {
    $criterio->add(CliCliente::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_creado_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}
if ($cmb_cli_cliente_tipo_estado_venta_id != 0) {
    $criterio->add(CliClienteTipoEstadoVenta::GEN_ATTR_ID, $cmb_cli_cliente_tipo_estado_venta_id, Criterio::IGUAL);
}
if ($cmb_cli_cliente_tipo_gestion_id != 0) {
    $criterio->add(CliClienteTipoGestion::GEN_ATTR_ID, $cmb_cli_cliente_tipo_gestion_id, Criterio::IGUAL);
}
if ($cmb_cli_cliente_periodicidad_gestion_id != 0) {
    $criterio->add(CliClientePeriodicidadGestion::GEN_ATTR_ID, $cmb_cli_cliente_periodicidad_gestion_id, Criterio::IGUAL);
}

$criterio->addTabla(CliCliente::GEN_TABLA);
if ($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL) {
    $criterio->addRealJoin(GralSucursalCliCliente::GEN_TABLA, GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
    $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID);
}elseif($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR){
    $criterio->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
    $criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID);
}
$criterio->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClienteTipoEstadoVenta::GEN_TABLA, CliClienteTipoEstadoVenta::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClienteTipoGestion::GEN_TABLA, CliClienteTipoGestion::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_GESTION_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClientePeriodicidadGestion::GEN_TABLA, CliClientePeriodicidadGestion::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CLIENTE_PERIODICIDAD_GESTION_ID, 'LEFT JOIN');
$criterio->setCriterios();
$cli_clientes = CliCliente::getCliClientes(null, $criterio);
//Gral::prr($cli_clientes);
//exit;

// -----------------------------------------------------------------------------
// Consulta BD Secundaria
// -----------------------------------------------------------------------------
if($cmb_datos_extra == 1){
    $arr_datos_extras_clientes = CliCliente::getArrayDatosExtras($cli_clientes, $cantidad_meses_cerrados);
}
//Gral::prr($arr_datos_extras_clientes);exit;

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
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 49, 'titulo' => 'Cliente', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array("ancho" => 26, "titulo" => 'Localidad', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 25, "titulo" => 'Categoria', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 11, "titulo" => 'Estado', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 27, "titulo" => 'Sucursales', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array("ancho" => 27, "titulo" => 'Vendedores', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array("ancho" => 22, "titulo" => 'Ult. Vent. Importe', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 19, "titulo" => 'Ult. Vent. Fecha', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array("ancho" => 15, "titulo" => 'Hace (Dias)', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 19, "titulo" => 'Hace (Semanas)', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 17, "titulo" => 'Estado Venta', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 20, "titulo" => 'Tipo Gestion', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 17, "titulo" => 'Periodicidad', 'formato' => DbExcel::FORMATO_NINGUNO),
);
$primer_columna_meses_ventas_cantidad = $columna;

// -----------------------------------------------------------------------------
// Cabeceras de Datos Extras (se procesan las cabeceras dinamicas a utilizar)
// Se crean 3 arrays diferentes:
// * $arr_cabeceras_extras_cantidad_ventas ---> 1er cabecera dinamica con formato "NINGUNO".
// * $arr_cabeceras_extras_total_ventas ---> 2da cabecera dinamica con formato "IMPORTE".
// * $arr_cabeceras_totalizador ---> 3ra cabecera estatica (totalizadores).
// 
// Tanto los arrays "$arr_cabeceras_extras_cantidad_ventas", "$arr_cabeceras_extras_total_ventas" y
// "$arr_cabeceras_totalizador" luego se agregan en el array principal de cabeceras "$arr_cabeceras".
// -----------------------------------------------------------------------------
if($cmb_datos_extra == 1){
    
    $arr_rango = $arr_datos_extras_clientes['DATOS']['PERIODO'];
    $cantidad_meses = count($arr_rango);
    
    $primer_columna_meses_ventas_importe = $primer_columna_meses_ventas_cantidad + $cantidad_meses;
    
    $cont = 0;
    foreach($arr_rango as $periodo){
        $arr_periodo = Date::getArrAnioMesDesdePeriodo($periodo);
        
        $indice_1 = $primer_columna_meses_ventas_cantidad + $cont;
        $indice_2 = $primer_columna_meses_ventas_importe + $cont;
        
        $arr_cabeceras_extras_cantidad_ventas[$indice_1]['ancho'] = 20;
        $arr_cabeceras_extras_cantidad_ventas[$indice_1]['titulo'] = Date::getMesLetras($arr_periodo['mes']).' '.$arr_periodo['anio'];
        $arr_cabeceras_extras_cantidad_ventas[$indice_1]['formato'] = DbExcel::FORMATO_NINGUNO;
        
        $arr_cabeceras_extras_total_ventas[$indice_2]['ancho'] = 20;
        $arr_cabeceras_extras_total_ventas[$indice_2]['titulo'] = Date::getMesLetras($arr_periodo['mes']).' '.$arr_periodo['anio'];
        $arr_cabeceras_extras_total_ventas[$indice_2]['formato'] = DbExcel::FORMATO_IMPORTE;
        
        $cont++;
    }
    //Gral::prr($arr_cabeceras_extras_cantidad_ventas);
    //Gral::prr($arr_cabeceras_extras_total_ventas);
    
    $primer_columna_meses_ventas_totales = $indice_2 + 1;
    $indice_3 = $primer_columna_meses_ventas_totales;
    
    $arr_cabeceras_totalizador = array(
        $indice_3++ => array('ancho' => 13, 'titulo' => 'Mediana', 'formato' => DbExcel::FORMATO_NINGUNO),
        $indice_3++ => array('ancho' => 15, 'titulo' => 'Importe', 'formato' => DbExcel::FORMATO_IMPORTE),
        $indice_3++ => array("ancho" => 18, "titulo" => 'Prom Importe', 'formato' => DbExcel::FORMATO_IMPORTE),
        $indice_3   => array('ancho' => 15, 'titulo' => 'Potencial', 'formato' => DbExcel::FORMATO_NINGUNO),
    );
    //Gral::prr($arr_cabeceras_totalizador);exit;
    
    $ultima_columna_meses_ventas_totales = $indice_3;
    
    $arr_cabeceras = array_merge($arr_cabeceras, $arr_cabeceras_extras_cantidad_ventas);
    $arr_cabeceras = array_merge($arr_cabeceras, $arr_cabeceras_extras_total_ventas);
    $arr_cabeceras = array_merge($arr_cabeceras, $arr_cabeceras_totalizador);
}
//Gral::prr($arr_cabeceras);exit;

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
foreach ($cli_clientes as $cli_cliente) {
    
    $gral_si_no = GralSiNo::getOxId($cli_cliente->getEstado());
    
    $vendedores = '';
    $vta_vendedors = $cli_cliente->getVtaVendedorsXCliClienteVtaVendedor();
    foreach ($vta_vendedors as $vta_vendedor) {
        $vendedores .= $vta_vendedor->getDescripcion();
        $vendedores .= Gral::REPORTES_SEPARADOR;
    }
    
    $sucursales = '';
    $gral_sucursal_cli_clientes = $cli_cliente->getGralSucursalCliClientes();
    foreach ($gral_sucursal_cli_clientes as $gral_sucursal_cli_cliente) {
        $gral_sucursal = $gral_sucursal_cli_cliente->getGralSucursal();
        if($gral_sucursal_cli_cliente->getAutomatico()){
            $sucursales .= $gral_sucursal->getDescripcion();            
        }else{
            $sucursales .= $gral_sucursal->getDescripcion().' (M)';            
        }
        $sucursales .= Gral::REPORTES_SEPARADOR;
    }
    
    $vta_presupuesto = $cli_cliente->getUltimoVtaPresupuestoAprobado();
    if ($vta_presupuesto) {
        $fecha_presupuesto = $vta_presupuesto->getFecha();
        $cantidad_dias = Date::getDiferenciaTiempo($caso = 'd', $fecha_presupuesto, date('Y-m-d'));
        $importe_presupuesto = $vta_presupuesto->getImporteTotalPresupuestoConIva(false, 0);
    }
    
    $fila++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    // -------------------------------------------------------------------------
    // Datos Estandar
    // -------------------------------------------------------------------------
    $valor = $cli_cliente->getId();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $cli_cliente->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getGeoLocalidad()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getCliCategoria()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $gral_si_no->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $sucursales;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vendedores;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    if ($vta_presupuesto) {
        $valor = $importe_presupuesto;
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;
        
        $valor = DbExcel::getFechaToFormula($fecha_presupuesto);
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
        $columna++;
        
        $valor = $cantidad_dias;
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;

        $valor = floor($cantidad_dias / 7);
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;
    } else {
        $columna++;
        $columna++;
        $columna++;
        $columna++;
    }
    
    $valor = $cli_cliente->getCliClienteTipoEstadoVenta()->getDescripcionPublica();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;    

    $valor = $cli_cliente->getCliClienteTipoGestion()->getDescripcionPublica();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;    
    
    $valor = $cli_cliente->getCliClientePeriodicidadGestion()->getDescripcionPublica();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    // -------------------------------------------------------------------------
    // Datos Extras
    // -------------------------------------------------------------------------
    if($cmb_datos_extra == 1){
        
        $arr_rango = $arr_datos_extras_clientes['DATOS']['PERIODO'];
        
        $cont = 0;
        foreach($arr_rango as $periodo){
            
            $cantidad = $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['PERIODO'][$periodo]['TOTAL']['VENTAS_CADA_CUANTOS_DIAS'];
            $cantidad_dias_mes = $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['PERIODO'][$periodo]['TOTAL']['CANTIDAD_DIAS_VENDIDOS'];
            $arr_periodo = Date::getArrAnioMesDesdePeriodo($periodo);
            $texto = $cantidad_dias_mes . ' dias vendidos en ' . Date::getMesLetras($arr_periodo['mes']);
            $importe = $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['PERIODO'][$periodo]['TOTAL']['IMPORTE_VENTAS'];
            
            $columna = $primer_columna_meses_ventas_cantidad + $cont;
            DbExcel::setCelda($xls, $columna, $fila, $cantidad, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
            DbExcel::getInsertarComentario($xls, $columna, $fila, $texto);
            
            $columna = $primer_columna_meses_ventas_importe + $cont;
            DbExcel::setCelda($xls, $columna, $fila, $importe, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
            
            $cont++;
        }
        
        $cantidad = $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['TOTALIZADOR']['MEDIANA'];
        $importe = $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['TOTALIZADOR']['IMPORTE_VENTAS'];
        $importe_prom = $importe / $cantidad_meses;
        
        // se deduce si es un cliente potencial para seguimiento
        $cliente_potencial_para_seguimiento = $cli_cliente->getEsClientePotencialParaSeguimiento($arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]);        
        $cliente_potencial_para_seguimiento_texto = ($cliente_potencial_para_seguimiento) ? 'Potencial' : '';

        $columna = $primer_columna_meses_ventas_totales;
        DbExcel::setCelda($xls, $columna, $fila, $cantidad, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;
        
        DbExcel::setCelda($xls, $columna, $fila, $importe, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;
        
        DbExcel::setCelda($xls, $columna, $fila, $importe_prom, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;

        DbExcel::setCelda($xls, $columna, $fila, $cliente_potencial_para_seguimiento_texto, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        
    } else {
        $columna--;
    }
}

// -----------------------------------------------------------------------------
// Estilo y Formato
// -----------------------------------------------------------------------------
DbExcel::getEstiloMasivo($xls, $borde_style, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_XLS_CONFIG_ALTO_FILA);
DbExcel::getEstiloPersonalizado($xls, $arr_cabeceras, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_COLOR_ESTANDAR_FONDO_CABECERA, DB_COLOR_ESTANDAR_LETRA_CABECERA);

// -----------------------------------------------------------------------------
// Cabeceras Estaticas
// -----------------------------------------------------------------------------

// Informacion de Clientes
$primer_columna_letra = PHPExcel_Cell::stringFromColumnIndex(DB_XLS_CONFIG_PRIMER_COLUMNA);
$ultima_columna_letra = PHPExcel_Cell::stringFromColumnIndex($primer_columna_meses_ventas_cantidad - 1);
$rango = $primer_columna_letra . DB_XLS_CONFIG_FILA_CABECERA_ESTATICA . ':' . $ultima_columna_letra . DB_XLS_CONFIG_FILA_CABECERA_ESTATICA;
DbExcel::estiloRango($xls, $borde_style, $rango, DB_COLOR_ESTANDAR_FONDO_CABECERA, DB_COLOR_ESTANDAR_LETRA_CABECERA);
$xls->setActiveSheetIndex(0)->mergeCells($rango);
DbExcel::setCelda($xls, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_FILA_CABECERA_ESTATICA, 'Informacion de Clientes', $type = PHPExcel_Cell_DataType::TYPE_STRING);

if($cmb_datos_extra == 1){
    
    ($cantidad_meses > 1) ? $descripcion = 'Meses' : $descripcion = 'Mes';
    $primer_fila_color = DB_XLS_CONFIG_PRIMER_FILA + 1;
    
    // Cantidad de Ventas
    $primer_columna_letra = PHPExcel_Cell::stringFromColumnIndex($primer_columna_meses_ventas_cantidad);
    $ultima_columna_letra = PHPExcel_Cell::stringFromColumnIndex($primer_columna_meses_ventas_importe - 1);
    $rango = $primer_columna_letra . DB_XLS_CONFIG_FILA_CABECERA_ESTATICA . ':' . $ultima_columna_letra . DB_XLS_CONFIG_FILA_CABECERA_ESTATICA;
    DbExcel::estiloRango($xls, $borde_style, $rango, DB_COLOR_ESTANDAR_FONDO_CABECERA, DB_COLOR_ESTANDAR_LETRA_CABECERA);
    $xls->setActiveSheetIndex(0)->mergeCells($rango);
    DbExcel::setCelda($xls, $primer_columna_meses_ventas_cantidad, DB_XLS_CONFIG_FILA_CABECERA_ESTATICA, 'Ventas cada N dias ('.$cantidad_meses.' '.$descripcion.')', $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $rango_color_fondo = $primer_columna_letra . $primer_fila_color . ':' . $ultima_columna_letra . $fila;
    DbExcel::getEstiloRangoPersonalizado($xls, null, $rango_color_fondo, 'C1EDF7', '', false);
    
    // Importe de Ventas
    $primer_columna_letra = PHPExcel_Cell::stringFromColumnIndex($primer_columna_meses_ventas_importe);
    $ultima_columna_letra = PHPExcel_Cell::stringFromColumnIndex($primer_columna_meses_ventas_totales - 1);
    $rango = $primer_columna_letra . DB_XLS_CONFIG_FILA_CABECERA_ESTATICA . ':' . $ultima_columna_letra . DB_XLS_CONFIG_FILA_CABECERA_ESTATICA;
    DbExcel::estiloRango($xls, $borde_style, $rango, DB_COLOR_ESTANDAR_FONDO_CABECERA, DB_COLOR_ESTANDAR_LETRA_CABECERA);
    $xls->setActiveSheetIndex(0)->mergeCells($rango);
    DbExcel::setCelda($xls, $primer_columna_meses_ventas_importe, DB_XLS_CONFIG_FILA_CABECERA_ESTATICA, 'Importe de Ventas ('.$cantidad_meses.' '.$descripcion.')', $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $rango_color_fondo = $primer_columna_letra . $primer_fila_color . ':' . $ultima_columna_letra . $fila;
    DbExcel::getEstiloRangoPersonalizado($xls, null, $rango_color_fondo, 'C5FFCB', '', false);
    
    // Total de Ventas
    $primer_columna_letra = PHPExcel_Cell::stringFromColumnIndex($primer_columna_meses_ventas_totales);
    $ultima_columna_letra = PHPExcel_Cell::stringFromColumnIndex($ultima_columna_meses_ventas_totales);
    $rango = $primer_columna_letra . DB_XLS_CONFIG_FILA_CABECERA_ESTATICA . ':' . $ultima_columna_letra . DB_XLS_CONFIG_FILA_CABECERA_ESTATICA;
    DbExcel::estiloRango($xls, $borde_style, $rango, DB_COLOR_ESTANDAR_FONDO_CABECERA, DB_COLOR_ESTANDAR_LETRA_CABECERA);
    $xls->setActiveSheetIndex(0)->mergeCells($rango);
    DbExcel::setCelda($xls, $primer_columna_meses_ventas_totales, DB_XLS_CONFIG_FILA_CABECERA_ESTATICA, 'Estadisticas ('.$cantidad_meses.' '.$descripcion.')', $type = PHPExcel_Cell_DataType::TYPE_STRING);
    //primeras 2 columnas un color
    $ultima_columna_letra = PHPExcel_Cell::stringFromColumnIndex($primer_columna_meses_ventas_totales+1);
    $rango_color_fondo = $primer_columna_letra . $primer_fila_color . ':' . $ultima_columna_letra . $fila;
    DbExcel::getEstiloRangoPersonalizado($xls, null, $rango_color_fondo, 'C1EDF7', '', false);
    //segundas 2 columnas otro color
    $primer_columna_letra = PHPExcel_Cell::stringFromColumnIndex($ultima_columna_meses_ventas_totales-1);
    $ultima_columna_letra = PHPExcel_Cell::stringFromColumnIndex($ultima_columna_meses_ventas_totales);
    $rango_color_fondo = $primer_columna_letra . $primer_fila_color . ':' . $ultima_columna_letra . $fila;
    DbExcel::getEstiloRangoPersonalizado($xls, null, $rango_color_fondo, 'C5FFCB', '', false);
}

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