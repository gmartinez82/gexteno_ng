<?php

set_time_limit(0);

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
    $criterio->add(PrvProveedor::GEN_ATTR_DESCRIPCION, $txt_descripcion, Criterio::LIKE);
}

if ($txt_creado_desde != '') {
    $criterio->add(PrvProveedor::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_creado_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}

if ($txt_creado_hasta != '') {
    $criterio->add(PrvProveedor::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_creado_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

if ($cmb_gral_tipo_personeria_id != 0) {
    $criterio->add(PrvProveedor::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, $cmb_gral_tipo_personeria_id, Criterio::IGUAL);
}

if ($cmb_gral_condicion_iva_id != 0) {
    $criterio->add(PrvProveedor::GEN_ATTR_GRAL_CONDICION_IVA_ID, $cmb_gral_condicion_iva_id, Criterio::IGUAL);
}

if ($cmb_geo_pais_id != 0) {
    $criterio->add(GeoPais::GEN_ATTR_ID, $cmb_geo_pais_id, Criterio::LIKE);
}

if ($cmb_geo_provincia_id != 0) {
    $criterio->add(GeoProvincia::GEN_ATTR_ID, $cmb_geo_provincia_id, Criterio::LIKE);
}

if ($cmb_geo_localidad_id != 0) {
    $criterio->add(PrvProveedor::GEN_ATTR_GEO_LOCALIDAD_ID, $cmb_geo_localidad_id, Criterio::LIKE);
}

if ($cmb_cli_grupo_id != 0) {
    $criterio->add(PrvProveedor::GEN_ATTR_PRV_GRUPO_ID, $cmb_cli_grupo_id, Criterio::LIKE);
}

if ($cmb_cli_categoria_id != 0) {
    $criterio->add(PrvProveedor::GEN_ATTR_PRV_CATEGORIA_ID, $cmb_cli_categoria_id, Criterio::IGUAL);
}

if ($cmb_cli_estado != -1) { // solo opcion SI habilitada
    $criterio->add(PrvProveedor::GEN_ATTR_ESTADO, $cmb_cli_estado, Criterio::IGUAL);
}

$criterio->addTabla(PrvProveedor::GEN_TABLA);
$criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, PrvProveedor::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoProvincia::GEN_TABLA, GeoProvincia::GEN_ATTR_ID, GeoLocalidad::GEN_ATTR_GEO_PROVINCIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoPais::GEN_TABLA, GeoPais::GEN_ATTR_ID, GeoProvincia::GEN_ATTR_GEO_PAIS_ID, 'LEFT JOIN');
$criterio->setCriterios();
$prv_proveedors = PrvProveedor::getPrvProveedors(null, $criterio);
//Gral::prr($prv_proveedors);
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
    $columna++ => array('ancho' => 50, 'titulo' => 'Proveedor', 'indice' => 'proveedor'),
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
    $columna++ => array("ancho" => 30, "titulo" => 'Grupo', 'indice' => 'grupo'),
    $columna++ => array("ancho" => 30, "titulo" => 'Categoria', 'indice' => 'categoria'),
    $columna++ => array("ancho" => 20, "titulo" => 'Fecha Creado', 'indice' => 'creado'),
    $columna++ => array("ancho" => 20, "titulo" => 'Hora Creado', 'indice' => 'creado'),
    $columna++ => array("ancho" => 20, "titulo" => 'Estado', 'indice' => 'estado'),
    $columna++ => array("ancho" => 70, "titulo" => 'Telefonos', 'indice' => 'telefonos'),
    $columna++ => array("ancho" => 70, "titulo" => 'Emails', 'indice' => 'emails'),
    $columna++ => array("ancho" => 70, "titulo" => 'Domicilios', 'indice' => 'domicilios'),
    $columna++ => array("ancho" => 70, "titulo" => 'Insumos', 'indice' => 'insumos'),
    $columna++ => array("ancho" => 70, "titulo" => 'Usuarios', 'indice' => 'usuarios'),
    $columna++ => array("ancho" => 70, "titulo" => 'Rubros', 'indice' => 'rubros'),
    $columna++ => array("ancho" => 70, "titulo" => 'Preventistas', 'indice' => 'preventistas'),
    $columna++ => array("ancho" => 70, "titulo" => 'Convenio Desc', 'indice' => 'convenio_descuentos'),
    $columna++ => array("ancho" => 70, "titulo" => 'Desc Financieros', 'indice' => 'descuento_financieros'),
    $columna++ => array("ancho" => 70, "titulo" => 'Desc Comercials', 'indice' => 'descuento_comercials'),
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

foreach ($prv_proveedors as $prv_proveedor) {
    $gral_si_no = GralSiNo::getOxId($prv_proveedor->getEstado());

    $id = $prv_proveedor->getId();
    $proveedor = $prv_proveedor->getDescripcion();
    $personeria = $prv_proveedor->getGralTipoPersoneria()->getDescripcion();
    $condicion_iva = $prv_proveedor->getGralCondicionIva()->getDescripcion();
    $razon_social = $prv_proveedor->getRazonSocial();
    $cuit = $prv_proveedor->getCuit();
    $domicilio = $prv_proveedor->getDomicilioLegal();
    $telefono = $prv_proveedor->getTelefono();
    $email = $prv_proveedor->getEmail();
    $codigo_postal = $prv_proveedor->getCodigoPostal();
    $pais = $prv_proveedor->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $provincia = $prv_proveedor->getGeoLocalidad()->getGeoProvincia()->getDescripcion();
    $localidad = $prv_proveedor->getGeoLocalidad()->getDescripcion();
    $grupo = $prv_proveedor->getPrvGrupo()->getDescripcion();
    $categoria = $prv_proveedor->getPrvCategoria()->getDescripcion();
    $estado = $gral_si_no->getDescripcion(); //$prv_proveedor->getEstado();
    $creado = Gral::getFechaToWEB($prv_proveedor->getCreado());
    $hora_creado = Gral::getHoraToWEB($prv_proveedor->getCreado());

    $telefonos = '';
    $emails = '';
    $domicilios = '';
    $insumos = '';
    $usuarios = '';
    $rubros = '';
    $preventistas = '';
    $prv_descuento_convenio_descripcion = '';
    $prv_descuento_finacieros_descripcion = '';
    $prv_descuento_comercials_descripcion = '';
    $convenio_descuentos = '';
    $descuento_financieros = '';
    $descuento_comercials = '';

    $prv_telefonos = array();
    $prv_emails = array();
    $prv_domicilios = array();
    $ins_insumos = array();
    $us_usuarios = array();
    $prv_rubros = array();
    $prv_preventistas = array();
    $prv_convenio_descuentos = array();
    $prv_descuento_finanacieros = array();
    $prv_descuento_comercials = array();

    $prv_telefonos = $prv_proveedor->getPrvTelefonos();
    foreach ($prv_telefonos as $prv_telefono) {
        $telefonos .= $prv_telefono->getDescripcion();
        $telefonos .= Gral::REPORTES_SEPARADOR;
    }

    $prv_emails = $prv_proveedor->getPrvEmails();
    foreach ($prv_emails as $prv_email) {
        $emails .= $prv_email->getDescripcion();
        $emails .= Gral::REPORTES_SEPARADOR;
    }

    $prv_domicilios = $prv_proveedor->getPrvDomicilios();
    foreach ($prv_domicilios as $prv_domicilio) {
        $domicilios .= $prv_domicilio->getDescripcion();
        $domicilios .= Gral::REPORTES_SEPARADOR;
    }

    $ins_insumos = $prv_proveedor->getInsInsumosXInsInsumoPrvProveedor();
    foreach ($ins_insumos as $ins_insumo) {
        $insumos .= $ins_insumo->getDescripcion();
        $insumos .= Gral::REPORTES_SEPARADOR;
    }

    $us_usuarios = $prv_proveedor->getUsUsuariosXPrvProveedorUsUsuario();
    foreach ($us_usuarios as $us_usuario) {
        $usuarios .= $us_usuario->getDescripcion();
        $usuarios .= Gral::REPORTES_SEPARADOR;
    }

    $prv_rubros = $prv_proveedor->getPrvRubrosXPrvProveedorPrvRubro();
    foreach ($prv_rubros as $prv_rubro) {
        $rubros .= $prv_rubro->getDescripcion();
        $rubros .= Gral::REPORTES_SEPARADOR;
    }

    $prv_preventistas = $prv_proveedor->getPrvPreventistas();
    foreach ($prv_preventistas as $prv_preventista) {
        $preventistas .= $prv_preventista->getDescripcion();
        $preventistas .= Gral::REPORTES_SEPARADOR;
    }

    $prv_convenio_descuentos = $prv_proveedor->getPrvConvenioDescuentos();
    foreach ($prv_convenio_descuentos as $prv_convenio_descuento) {
        $prv_descuento_convenio_descripcion .= $prv_convenio_descuento->getDescripcion();
        $prv_descuento_convenio_descripcion .= Gral::REPORTES_SEPARADOR;
    }

    $prv_descuento_finacieros = $prv_proveedor->getPrvDescuentoFinancieros();
    foreach ($prv_descuento_finacieros as $prv_descuento_finaciero) {
        $prv_descuento_finacieros_descripcion .= $prv_descuento_finaciero->getDescripcion();
        $prv_descuento_finacieros_descripcion .= Gral::REPORTES_SEPARADOR;
    }

    $prv_descuento_comercials = $prv_proveedor->getPrvDescuentoComercials();
    foreach ($prv_descuento_comercials as $prv_descuento_comercial) {
        $prv_descuento_comercials_descripcion .= $prv_descuento_comercial->getDescripcion();
        $prv_descuento_comercials_descripcion .= Gral::REPORTES_SEPARADOR;
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
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($proveedor, PHPExcel_Cell_DataType::TYPE_STRING);
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
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pais, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($provincia, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($localidad, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($grupo, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($categoria, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($creado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($hora_creado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($estado, PHPExcel_Cell_DataType::TYPE_STRING);
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
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($insumos, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($usuarios, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($rubros, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($preventistas, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($prv_descuento_convenio_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($prv_descuento_finacieros_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($prv_descuento_comercials_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
}

// -----------------------------------------------------------------------------
//Inmovilizar filas y columnas
// -----------------------------------------------------------------------------
$xls->getActiveSheet()->freezePane(DB_XLS_CONFIG_PRIMER_COLUMNA . (DB_XLS_CONFIG_PRIMER_FILA + 1));

// -----------------------------------------------------------------------------
//Insertar filtros
// -----------------------------------------------------------------------------
$xls->getActiveSheet()->setAutoFilter(DB_XLS_CONFIG_PRIMER_COLUMNA . DB_XLS_CONFIG_PRIMER_FILA . ':' . $columna_ultima . DB_XLS_CONFIG_PRIMER_FILA);

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