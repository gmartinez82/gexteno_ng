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

$db_nombre_objeto = 'rep_stock_resumen';
$db_nombre_pagina = 'rep_stock_resumen';

$c = new Criterio();
$c->addDistinct(true);

if ($cmb_pan_panol_id != 0) {
    $c->add('pan_panol.id', $cmb_pan_panol_id, Criterio::IGUAL);
}
if ($cmb_ins_categoria_id != 0) {
    $c->add('ins_categoria.id', $cmb_ins_categoria_id, Criterio::IGUAL);
}
if ($cmb_ins_stock_resumen_tipo_estado_id != 0) {
    $c->add('ins_stock_resumen_tipo_estado.id', $cmb_ins_stock_resumen_tipo_estado_id, Criterio::IGUAL);
}
if ($txt_descripcion != '') {
    $c->add('ins_insumo.descripcion', $txt_descripcion, Criterio::LIKE);
}
if ($txt_codigo_interno != '') {
    $c->add('ins_insumo.codigo_interno', $txt_codigo_interno, Criterio::LIKE);
}
if ($cmb_ins_etiqueta_id != 0) {
    $c->add('ins_etiqueta.id', $cmb_ins_etiqueta_id, Criterio::IGUAL);
}
if ($cmb_prv_proveedor_id != 0) {
    $c->add('prv_proveedor.id', $cmb_prv_proveedor_id, Criterio::IGUAL);
}
if ($txt_desde != '') {
    $c->add('ins_stock_resumen.modificado', Gral::getFechaToDb($txt_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_hasta != '') {
    $c->add('ins_stock_resumen.modificado', Gral::getFechaToDb($txt_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

$c->addTabla('ins_stock_resumen');

$c->addRealJoin('pan_panol', 'pan_panol.id', 'ins_stock_resumen.pan_panol_id');
$c->addRealJoin('ins_stock_resumen_tipo_estado', 'ins_stock_resumen_tipo_estado.id', 'ins_stock_resumen.ins_stock_resumen_tipo_estado_id');

$c->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_stock_resumen.ins_insumo_id');
$c->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');

$c->addRealJoin('ins_insumo_ins_etiqueta', 'ins_insumo_ins_etiqueta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$c->addRealJoin('ins_etiqueta', 'ins_etiqueta.id', 'ins_insumo_ins_etiqueta.ins_etiqueta_id', 'LEFT JOIN');

//$c->addRealJoin('prv_insumo', 'prv_insumo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
//$c->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_insumo.prv_proveedor_id', 'LEFT JOIN');
$c->addRealJoin('ins_insumo_prv_proveedor', 'ins_insumo_prv_proveedor.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$c->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'ins_insumo_prv_proveedor.prv_proveedor_id', 'LEFT JOIN');

$c->addOrden('ins_stock_resumen.id', 'desc');
$c->setCriterios();
$ins_stock_resumens = InsStockResumen::getInsStockResumens(null, $c);
//Gral::prr($ins_stock_resumens);
//exit;

// -----------------------------------------------------------------------------
// estilos
// -----------------------------------------------------------------------------
$total_style = array(
    'font' => array(
        'bold' => true,
        'size' => 14
        ));
$subtotal_style = array(
    'font' => array(
        'bold' => true,
        'size' => 12
        ));
$negrita_style = array(
    'font' => array(
        'bold' => true
        ));
$borde_style = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$gris_style = array(
    'font' => array(
        'color' => array('rgb' => '666666'),
        'size' => 8,
        'name' => 'Verdana'
        ));

$dentro_vida_util_style = array(
    'font' => array(
        'color' => array('rgb' => '006600'),
        'size' => 8,
        'name' => 'Verdana'
        ));
$dentro_margen_style = array(
    'font' => array(
        'color' => array('rgb' => 'FF9900'),
        'size' => 8,
        'name' => 'Verdana'
        ));
$fuera_margen_style = array(
    'font' => array(
        'color' => array('rgb' => 'ff0000'),
        'size' => 9,
        'name' => 'Verdana'
        ));

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
    $columna++ => array('ancho' => 25, 'titulo' => 'Cod Interno', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 50, 'titulo' => 'Insumo', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 40, 'titulo' => 'Categoria', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 20, 'titulo' => 'Deposito', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 12, 'titulo' => 'Stock Real', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 12, 'titulo' => 'Reservados', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 12, 'titulo' => 'Stock Actual', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Ult Modif Stock', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 20, 'titulo' => 'Tipo Estado', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 20, 'titulo' => 'Costo Actual', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 20, 'titulo' => 'Costo en Panol', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 20, 'titulo' => 'Ult Modif Costo', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 10, 'titulo' => 'PtoMin', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 10, 'titulo' => 'PtoPed', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 10, 'titulo' => 'PtoMax', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 15, 'titulo' => 'Ubicacion', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 40, 'titulo' => 'Proveedores', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 100, 'titulo' => 'Etiquetas', 'formato' => DbExcel::FORMATO_DESCRIPCION),
);

if($cmb_datos_extra == 1){
    $arr_cabeceras_extras = array(
        $columna++ => array('ancho' => 18, 'titulo' => 'Cant Ult Venta', 'formato' => DbExcel::FORMATO_NINGUNO),
        $columna++ => array('ancho' => 19, 'titulo' => 'Total Ult Venta', 'formato' => DbExcel::FORMATO_NINGUNO),
        $columna++ => array('ancho' => 19, 'titulo' => 'Fecha Ult Venta', 'formato' => DbExcel::FORMATO_FECHA),
        $columna++ => array('ancho' => 18, 'titulo' => 'Cant Ult Salida', 'formato' => DbExcel::FORMATO_NINGUNO),
        $columna++ => array('ancho' => 19, 'titulo' => 'Total Ult Salida', 'formato' => DbExcel::FORMATO_NINGUNO),
        $columna++ => array('ancho' => 19, 'titulo' => 'Fecha Ult Salida', 'formato' => DbExcel::FORMATO_FECHA),
        $columna++ => array('ancho' => 19, 'titulo' => 'Cant Ult Ingreso', 'formato' => DbExcel::FORMATO_NINGUNO),
        $columna++ => array('ancho' => 20, 'titulo' => 'Total Ult Ingreso', 'formato' => DbExcel::FORMATO_NINGUNO),
        $columna++ => array('ancho' => 21, 'titulo' => 'Fecha Ult Ingreso', 'formato' => DbExcel::FORMATO_FECHA),
        $columna++ => array('ancho' => 26, 'titulo' => 'Cant Ult Ajuste Stock', 'formato' => DbExcel::FORMATO_NINGUNO),
        $columna++ => array('ancho' => 26, 'titulo' => 'Total Ult Ajuste Stock', 'formato' => DbExcel::FORMATO_NINGUNO),
        $columna++ => array('ancho' => 28, 'titulo' => 'Fecha Ult Ajuste Stock', 'formato' => DbExcel::FORMATO_FECHA),
    );
    $arr_cabeceras = array_merge($arr_cabeceras, $arr_cabeceras_extras);
}

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
foreach ($ins_stock_resumens as $ins_stock_resumen) {

    $ins_insumo = $ins_stock_resumen->getInsInsumo();
    $ins_categoria = $ins_insumo->getInsCategoria();
    $pan_panol = $ins_stock_resumen->getPanPanol();
    $pde_centro_pedido = $pan_panol->getPdeCentroPedido();
    $ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual($pde_centro_pedido);
    $ins_stock_resumen_tipo_estado = $ins_stock_resumen->getInsStockResumenTipoEstadoActual();

    $ult_modificacion_stock = $ins_stock_resumen->getModificado();

    $prv_proveedors_descripcion = '';
    $prv_proveedors = $ins_insumo->getPrvProveedorsXInsInsumoPrvProveedor();
    foreach ($prv_proveedors as $prv_proveedor) {
        $prv_proveedors_descripcion .= $prv_proveedor->getDescripcion();
        $prv_proveedors_descripcion .= Gral::REPORTES_SEPARADOR . ' ';
    }

    $ins_etiquetas_descripcion = '';
    $ins_etiquetas = $ins_insumo->getInsEtiquetasXInsInsumoInsEtiqueta();
    foreach ($ins_etiquetas as $ins_etiqueta) {
        $ins_etiquetas_descripcion .= $ins_etiqueta->getDescripcion();
        $ins_etiquetas_descripcion .= Gral::REPORTES_SEPARADOR . ' ';
    }

    $costo_insumo = 0;
    $costo_en_panol = 0;
    $ult_modificacion_costo = '-';

    $cantidad_reservados = $ins_insumo->getInsInsumoReservasActivasCantidadEnPanol($pan_panol);
    $cantidad_total = $ins_stock_resumen->getCantidad() + $cantidad_reservados;

    if ($ins_insumo_costo) {
        $costo_insumo = $ins_insumo_costo->getCosto();
        $costo_en_panol = $ins_insumo_costo->getCosto() * $cantidad_total;
        $ult_modificacion_costo = Gral::getFechaHoraToWeb($ins_insumo_costo->getModificado());
        $ult_modificacion_costo = $ins_insumo_costo->getModificado(); // se sobreescribe con formato natural para ordenar en excel generado
    }

    $arr_puntos_insumo = $ins_insumo->getInsInsumoPuntosEnPanol($pan_panol);
    $ins_insumo_pan_panol = $ins_insumo->getUbicacionEnPanol($pan_panol);

    $fila++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;

    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $valor = $ins_insumo->getId();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    $valor = $ins_insumo->getCodigoInterno();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = $ins_insumo->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = $ins_categoria->getFamiliaDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = $pan_panol->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = $ins_stock_resumen->getCantidad();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    $valor = $cantidad_reservados;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    $valor = $cantidad_total;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = DbExcel::getFechaToFormula($ult_modificacion_stock);
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;

    $valor = $ins_stock_resumen_tipo_estado->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = $costo_insumo;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    $valor = $costo_en_panol;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    $valor = DbExcel::getFechaToFormula($ult_modificacion_costo);
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;

    $valor = $arr_puntos_insumo[InsInsumo::PUNTO_MINIMO];
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = $arr_puntos_insumo[InsInsumo::PUNTO_PEDIDO];
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = $arr_puntos_insumo[InsInsumo::PUNTO_MAXIMO];
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    $valor = ($ins_insumo_pan_panol) ? $ins_insumo_pan_panol->getDescripcion() : '';
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $prv_proveedors_descripcion;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $ins_etiquetas_descripcion;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    
    if($cmb_datos_extra == 1){
        $columna++;
        
        $array_fecha = $ins_stock_resumen->getUltimaFechaVenta();
        if($array_fecha){
            $array_resumens = $ins_stock_resumen->getCantidadUltimaVentaTotalEnFecha($array_fecha['fecha']);
            //Gral::prr($array_resumens);continue;
            if($array_resumens){
                $valor = $array_fecha['cantidad'];
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
                $columna++;

                $valor = $array_resumens['resumen']['total'];
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
                $columna++;

                $valor = DbExcel::getFechaToFormula($array_fecha['fecha']);
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
                $columna++;
            } else {
                $columna++;
                $columna++;
                $columna++;
            }   
        } else {
            $columna++;
            $columna++;
            $columna++;
        }

        $array_fecha = $ins_stock_resumen->getUltimaFechaSalida();
        if($array_fecha){
            $array_resumens = $ins_stock_resumen->getCantidadUltimaSalidaTotalEnFecha($array_fecha['fecha']);
            //Gral::prr($array_resumens);continue;
            if($array_resumens){
                $valor = $array_fecha['cantidad'];
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
                $columna++;

                $valor = $array_resumens['resumen']['total'];
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
                $columna++;

                $valor = DbExcel::getFechaToFormula($array_fecha['fecha']);
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
                $columna++;
            } else {
                $columna++;
                $columna++;
                $columna++;
            }   
        } else {
            $columna++;
            $columna++;
            $columna++;
        }

        $array_fecha = $ins_stock_resumen->getUltimaFechaIngreso();
        if($array_fecha){
            $array_resumens = $ins_stock_resumen->getCantidadUltimoIngresoTotalEnFecha($array_fecha['fecha']);
            //Gral::prr($array_resumens);continue;
            if($array_resumens){
                $valor = $array_fecha['cantidad'];
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
                $columna++;

                $valor = $array_resumens['resumen']['total'];
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
                $columna++;

                $valor = DbExcel::getFechaToFormula($array_fecha['fecha']);
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
                $columna++;
            } else {
                $columna++;
                $columna++;
                $columna++;
            }   
        } else {
            $columna++;
            $columna++;
            $columna++;
        }

        $array_fecha = $ins_stock_resumen->getUltimaFechaAjuste();
        if($array_fecha){
            $array_resumens = $ins_stock_resumen->getCantidadUltimoAjusteTotalEnFecha($array_fecha['fecha']);
            //Gral::prr($array_resumens);continue;
            if($array_resumens){
                $valor = $array_fecha['cantidad'];
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
                $columna++;

                $valor = $array_resumens['resumen']['total'];
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
                $columna++;

                $valor = DbExcel::getFechaToFormula($array_fecha['fecha']);
                DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
            } else {
                $columna++;
                $columna++;
            }   
        } else {
            $columna++;
            $columna++;
        }
    }
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
$xls->getActiveSheet()->setAutoFilter($primer_columna . DB_XLS_CONFIG_PRIMER_FILA . ':' . $ultima_columna . DB_XLS_CONFIG_PRIMER_FILA);

// -----------------------------------------------------------------------------
// Inmovilizar filas y columnas
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$columna_letra = PHPExcel_Cell::stringFromColumnIndex($columna);
$xls->getActiveSheet()->freezePane($columna_letra . (DB_XLS_CONFIG_PRIMER_FILA + 1));

// -----------------------------------------------------------------------------
// Genera el archivo de salida
// -----------------------------------------------------------------------------
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . DbConfig::CONFIG_GRAL_CLIENTE_MIN . '-' . $db_nombre_pagina . '.xlsx"');
header('Cache-Control: max-age=0');

$oWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$oWriter->save('php://output');
exit;
?>