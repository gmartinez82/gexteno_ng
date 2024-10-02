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

if ($txt_descripcion != '') {
    $criterio->add(CliCliente::GEN_ATTR_DESCRIPCION, $txt_descripcion, Criterio::LIKE);
}

if ($cmb_gral_tipo_personeria_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $cmb_gral_tipo_personeria_id, Criterio::IGUAL);
}

if ($cmb_gral_condicion_iva_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_GRAL_CONDICION_IVA_ID, $cmb_gral_condicion_iva_id, Criterio::IGUAL);
}

if ($cmb_geo_pais_id != 0) {
    $criterio->add(GeoPais::GEN_ATTR_ID, $cmb_geo_pais_id, Criterio::IGUAL);
}

if ($cmb_geo_provincia_id != 0) {
    $criterio->add(GeoProvincia::GEN_ATTR_ID, $cmb_geo_provincia_id, Criterio::IGUAL);
}

if ($cmb_geo_localidad_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, $cmb_geo_localidad_id, Criterio::IGUAL);
}

if ($cmb_geo_zona_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_GEO_ZONA_ID, $cmb_geo_zona_id, Criterio::IGUAL);
}

if ($cmb_cli_rubro_id != 0) {
    $criterio->add(CliRubro::GEN_ATTR_ID, $cmb_cli_rubro_id, Criterio::IGUAL);
}

if ($cmb_vta_vendedor_id != 0) {
    $criterio->add(VtaVendedor::GEN_ATTR_ID, $cmb_vta_vendedor_id, Criterio::IGUAL);
}

if ($cmb_cli_grupo_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_CLI_GRUPO_ID, $cmb_cli_grupo_id, Criterio::LIKE);
}

if ($cmb_cli_categoria_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, $cmb_cli_categoria_id, Criterio::IGUAL);
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

if ($txt_modificado_desde != '') {
    $criterio->add(CliCliente::GEN_ATTR_MODIFICADO, Gral::getFechaToDb($txt_modificado_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}

if ($txt_modificado_hasta != '') {
    $criterio->add(CliCliente::GEN_ATTR_MODIFICADO, Gral::getFechaToDb($txt_modificado_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

$criterio->addTabla(CliCliente::GEN_TABLA);
$criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoProvincia::GEN_TABLA, GeoProvincia::GEN_ATTR_ID, GeoLocalidad::GEN_ATTR_GEO_PROVINCIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoPais::GEN_TABLA, GeoPais::GEN_ATTR_ID, GeoProvincia::GEN_ATTR_GEO_PAIS_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClienteCliRubro::GEN_TABLA, CliClienteCliRubro::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliRubro::GEN_TABLA, CliRubro::GEN_ATTR_ID, CliClienteCliRubro::GEN_ATTR_CLI_RUBRO_ID, 'LEFT JOIN');
$criterio->setCriterios();
$cli_clientes = CliCliente::getCliClientes(null, $criterio);
//Gral::prr($cli_clientes);
//exit;

require_once Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';

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
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'indice' => 'id'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Cliente', 'indice' => 'cliente'),
    $columna++ => array('ancho' => 15, 'titulo' => 'Personeria', 'indice' => 'personeria'),
    $columna++ => array('ancho' => 30, 'titulo' => 'Condicion Iva', 'indice' => 'condicion_iva'),
    $columna++ => array('ancho' => 40, 'titulo' => 'Razon Social', 'indice' => 'razon_social'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cuit', 'indice' => 'cuit'),
    $columna++ => array('ancho' => 80, 'titulo' => 'Domicilio', 'indice' => 'domicilio'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Telefono', 'indice' => 'telefono'),
    $columna++ => array('ancho' => 40, 'titulo' => 'Email', 'indice' => 'email'),
    $columna++ => array('ancho' => 10, 'titulo' => 'CP', 'indice' => 'codigo_postal'),
    $columna++ => array('ancho' => 30, 'titulo' => 'Pais', 'indice' => 'pais'),
    $columna++ => array("ancho" => 30, "titulo" => 'Provincia', 'indice' => 'provincia'),
    $columna++ => array("ancho" => 30, "titulo" => 'Localidad', 'indice' => 'localidad'),
    $columna++ => array("ancho" => 15, "titulo" => 'Zona', 'indice' => 'zona'),
    $columna++ => array("ancho" => 30, "titulo" => 'Grupo', 'indice' => 'grupo'),
    $columna++ => array("ancho" => 30, "titulo" => 'Categoria', 'indice' => 'categoria'),
    $columna++ => array("ancho" => 20, "titulo" => 'Estado', 'indice' => 'estado'),
    $columna++ => array("ancho" => 70, "titulo" => 'Vendedores', 'indice' => 'vendedores'),
    $columna++ => array("ancho" => 70, "titulo" => 'Telefonos', 'indice' => 'telefonos'),
    $columna++ => array("ancho" => 70, "titulo" => 'Emails', 'indice' => 'emails'),
    $columna++ => array("ancho" => 70, "titulo" => 'Domicilios', 'indice' => 'domicilios'),
    $columna++ => array("ancho" => 70, "titulo" => 'Centro Recepcions', 'indice' => 'centro_recepcions'),
    $columna++ => array("ancho" => 70, "titulo" => 'Centro Pedidos', 'indice' => 'centro_pedidos'),
    $columna++ => array("ancho" => 70, "titulo" => 'Medios Digital', 'indice' => 'medio_digitals'),
    $columna++ => array("ancho" => 70, "titulo" => 'Exenciones Trib', 'indice' => 'exenciones_tributo'),
    $columna++ => array("ancho" => 40, "titulo" => 'Rubros', 'indice' => 'rubros'),
    $columna++ => array("ancho" => 20, "titulo" => 'Fecha Creado', 'indice' => 'creado'),
    $columna++ => array("ancho" => 20, "titulo" => 'Hora Creado', 'indice' => 'creado'),
    $columna++ => array("ancho" => 40, "titulo" => 'Creado Por', 'indice' => 'creado_por'),
    $columna++ => array("ancho" => 20, "titulo" => 'Fecha Modificado', 'indice' => 'modificado'),
    $columna++ => array("ancho" => 20, "titulo" => 'Hora Modificado', 'indice' => 'modificado'),
    $columna++ => array("ancho" => 40, "titulo" => 'Modificado Por', 'indice' => 'modificado_por'),
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

foreach ($cli_clientes as $cli_cliente) {
    $gral_si_no = GralSiNo::getOxId($cli_cliente->getEstado());

    $id = $cli_cliente->getId();
    $cliente = $cli_cliente->getDescripcion();
    $personeria = $cli_cliente->getGralTipoPersoneria()->getDescripcion();
    $condicion_iva = $cli_cliente->getGralCondicionIva()->getDescripcion();
    $razon_social = $cli_cliente->getRazonSocial();
    $cuit = $cli_cliente->getCuit();
    $domicilio = $cli_cliente->getDomicilioLegal();
    $telefono = $cli_cliente->getTelefono();
    $email = $cli_cliente->getEmail();
    $codigo_postal = $cli_cliente->getCodigoPostal();
    $geo_pais = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $geo_provincia = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion();
    $geo_localidad = $cli_cliente->getGeoLocalidad()->getDescripcion();
    $geo_zona = $cli_cliente->getGeoZona()->getDescripcion();
    $grupo = $cli_cliente->getCliGrupo()->getDescripcion();
    $categoria = $cli_cliente->getCliCategoria()->getDescripcion();
    $estado = $gral_si_no->getDescripcion(); //$cli_cliente->getEstado();
    $creado = Gral::getFechaToWEB($cli_cliente->getCreado());
    $hora_creado = Gral::getHoraToWEB($cli_cliente->getCreado());
    $creado_por_descripcion = $cli_cliente->getCreadoPorDescripcion();
    $modificado = Gral::getFechaToWEB($cli_cliente->getModificado());
    $hora_modificado = Gral::getHoraToWEB($cli_cliente->getModificado());
    $modificado_por_descripcion = $cli_cliente->getModificadoPorDescripcion();
    
    $vendedores = '';
    $telefonos = '';
    $emails = '';
    $domicilios = '';
    $centro_recepcions = '';
    $centro_pedidos = '';
    $medio_digitals = '';
    $tributo_exencions = '';
    $rubros = '';

    $vta_vendedors = $cli_cliente->getVtaVendedorsXCliClienteVtaVendedor();
    foreach ($vta_vendedors as $vta_vendedor) {
        $vendedores .= $vta_vendedor->getDescripcion();
        $vendedores .= Gral::REPORTES_SEPARADOR;
    }

    $cli_telefonos = $cli_cliente->getCliTelefonos();
    foreach ($cli_telefonos as $cli_telefono) {
        $telefonos .= $cli_telefono->getDescripcion();
        $telefonos .= Gral::REPORTES_SEPARADOR;
    }

    $cli_emails = $cli_cliente->getCliEmails();
    foreach ($cli_emails as $cli_email) {
        $emails .= $cli_email->getDescripcion();
        $emails .= Gral::REPORTES_SEPARADOR;
    }

    $cli_domicilios = $cli_cliente->getCliDomicilios();
    foreach ($cli_domicilios as $cli_domicilio) {
        $domicilios .= $cli_domicilio->getDescripcion();
        $domicilios .= Gral::REPORTES_SEPARADOR;
    }

    $cli_centro_recepcions = $cli_cliente->getCliCentroRecepcions();
    foreach ($cli_centro_recepcions as $cli_centro_recepcion) {
        $centro_recepcions .= $cli_centro_recepcion->getDescripcion();
        $centro_recepcions .= Gral::REPORTES_SEPARADOR;
    }

    $cli_centro_pedidos = $cli_cliente->getCliCentroPedidos();
    foreach ($cli_centro_pedidos as $cli_centro_pedido) {
        $centro_pedidos .= $cli_centro_pedido->getDescripcion();
        $centro_pedidos .= Gral::REPORTES_SEPARADOR;
    }

    $cli_medio_digitals = $cli_cliente->getCliMedioDigitals();
    foreach ($cli_medio_digitals as $cli_medio_digital) {
        $medio_digitals .= $cli_medio_digital->getDescripcion();
        $medio_digitals .= Gral::REPORTES_SEPARADOR;
    }

    $vta_tributo_exencions = $cli_cliente->getVtaTributoExencions();
    foreach ($vta_tributo_exencions as $vta_tributo_exencion) {
        $tributo_exencions .= $vta_tributo_exencion->getDescripcion();
        $tributo_exencions .= ' desde ' . Gral::getFechaToWEB($vta_tributo_exencion->getFechaInicio());
        $tributo_exencions .= ' hasta ' . Gral::getFechaToWEB($vta_tributo_exencion->getFechaFin());
        $tributo_exencions .= Gral::REPORTES_SEPARADOR;
    }

    $cli_rubros = $cli_cliente->getCliRubrosXCliClienteCliRubro();
    foreach ($cli_rubros as $cli_rubro) {
        $rubros .= $cli_rubro->getDescripcion();
        $rubros .= Gral::REPORTES_SEPARADOR;
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
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($id, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cliente, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($personeria, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($condicion_iva, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($razon_social, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cuit, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($domicilio, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($telefono, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($email, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($codigo_postal, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($geo_pais, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($geo_provincia, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($geo_localidad, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($geo_zona, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($grupo, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($categoria, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($estado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vendedores, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($telefonos, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($emails, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($domicilios, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($centro_recepcions, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($centro_pedidos, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($medio_digitals, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($tributo_exencions, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($rubros, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($creado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($hora_creado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($creado_por_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($modificado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($hora_modificado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($modificado_por_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
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