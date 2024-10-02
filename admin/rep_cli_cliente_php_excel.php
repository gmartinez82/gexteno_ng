<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once 'control/seguridad.php';
include_once '_autoload.php';
require_once Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';

// -----------------------------------------------------------------------------
// Constantes de Configuracion
// -----------------------------------------------------------------------------
define('DB_XLS_CONFIG_ALTO_FILA', 22);
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 0);
define('DB_XLS_CONFIG_PRIMER_FILA', 1);

// -----------------------------------------------------------------------------
// Consulta BD
// -----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);

//ADD Campos Fechas
if ($txt_creado_desde != '') {
    $criterio->add(CliCliente::GEN_ATTR_CREADO, $txt_creado_desde_to_db . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_creado_hasta != '') {
    $criterio->add(CliCliente::GEN_ATTR_CREADO, $txt_creado_hasta_to_db . ' 23:59:59', Criterio::MENORIGUAL);
}
if ($txt_modificado_desde != '') {
    $criterio->add(CliCliente::GEN_ATTR_MODIFICADO, $txt_modificado_desde_to_db . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_modificado_hasta != '') {
    $criterio->add(CliCliente::GEN_ATTR_MODIFICADO, $txt_modificado_hasta_to_db . ' 23:59:59', Criterio::MENORIGUAL);
}
//ADD Campos Strings
if ($txt_descripcion != '') {
    $criterio->add(CliCliente::GEN_ATTR_DESCRIPCION, $txt_descripcion, Criterio::LIKE);
}
//ADD Campos Booleanos
if ($cmb_cli_estado != -1) {
    $criterio->add(CliCliente::GEN_ATTR_ESTADO, $cmb_cli_estado, Criterio::IGUAL);
}
//ADD Campos Ids
if ($cmb_gral_tipo_personeria_id != 0) {
    $criterio->add(GralTipoPersoneria::GEN_ATTR_ID, $cmb_gral_tipo_personeria_id, Criterio::IGUAL);
}
if ($cmb_gral_condicion_iva_id != 0) {
    $criterio->add(GralCondicionIva::GEN_ATTR_ID, $cmb_gral_condicion_iva_id, Criterio::IGUAL);
}
if ($cmb_geo_pais_id != 0) {
    $criterio->add(GeoPais::GEN_ATTR_ID, $cmb_geo_pais_id, Criterio::IGUAL);
}
if ($cmb_geo_provincia_id != 0) {
    $criterio->add(GeoProvincia::GEN_ATTR_ID, $cmb_geo_provincia_id, Criterio::IGUAL);
}
if ($cmb_geo_localidad_id != 0) {
    $criterio->add(GeoLocalidad::GEN_ATTR_ID, $cmb_geo_localidad_id, Criterio::IGUAL);
}
if ($cmb_geo_zona_id != 0) {
    $criterio->add(GeoZona::GEN_ATTR_ID, $cmb_geo_zona_id, Criterio::IGUAL);
}
if ($cmb_cli_rubro_id != 0) {
    $criterio->add(CliRubro::GEN_ATTR_ID, $cmb_cli_rubro_id, Criterio::IGUAL);
}
if ($cmb_gral_sucursal_id != 0) {
    $criterio->add(GralSucursal::GEN_ATTR_ID, $cmb_gral_sucursal_id, Criterio::IGUAL);
}
if ($cmb_vta_vendedor_id != 0) {
    $criterio->add(VtaVendedor::GEN_ATTR_ID, $cmb_vta_vendedor_id, Criterio::IGUAL);
}
if ($cmb_cli_grupo_id != 0) {
    $criterio->add(CliGrupo::GEN_ATTR_ID, $cmb_cli_grupo_id, Criterio::IGUAL);
}
if ($cmb_cli_categoria_id != 0) {
    $criterio->add(CliCategoria::GEN_ATTR_ID, $cmb_cli_categoria_id, Criterio::IGUAL);
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
//JOINs Cardinalidad 1 a 1
$criterio->addRealJoin(CliGrupo::GEN_TABLA, CliGrupo::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_GRUPO_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralTipoPersoneria::GEN_TABLA, GralTipoPersoneria::GEN_ATTR_ID, CliCliente::GEN_ATTR_GRAL_TIPO_PERSONERIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralCondicionIva::GEN_TABLA, GralCondicionIva::GEN_ATTR_ID, CliCliente::GEN_ATTR_GRAL_CONDICION_IVA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoZona::GEN_TABLA, GeoZona::GEN_ATTR_ID, CliCliente::GEN_ATTR_GEO_ZONA_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClienteTipoEstadoVenta::GEN_TABLA, CliClienteTipoEstadoVenta::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_ESTADO_VENTA_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClienteTipoGestion::GEN_TABLA, CliClienteTipoGestion::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CLIENTE_TIPO_GESTION_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClientePeriodicidadGestion::GEN_TABLA, CliClientePeriodicidadGestion::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CLIENTE_PERIODICIDAD_GESTION_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, CliCliente::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoProvincia::GEN_TABLA, GeoProvincia::GEN_ATTR_ID, GeoLocalidad::GEN_ATTR_GEO_PROVINCIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoPais::GEN_TABLA, GeoPais::GEN_ATTR_ID, GeoProvincia::GEN_ATTR_GEO_PAIS_ID, 'LEFT JOIN');
//JOINs Cardinalidad 1 a N
$criterio->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliClienteCliRubro::GEN_TABLA, CliClienteCliRubro::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(CliRubro::GEN_TABLA, CliRubro::GEN_ATTR_ID, CliClienteCliRubro::GEN_ATTR_CLI_RUBRO_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralSucursalCliCliente::GEN_TABLA, GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID, 'LEFT JOIN');
$criterio->setCriterios();
$cli_clientes = CliCliente::getCliClientes(null, $criterio);
//Gral::prr($cli_clientes);
//exit;

// -----------------------------------------------------------------------------
// Inicializar Libro y Asignar Propiedades
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
// Inicializar Hoja/s
// -----------------------------------------------------------------------------
$xls->setActiveSheetIndex(0);
$xls->getActiveSheet()->setTitle('Datos');

// -----------------------------------------------------------------------------
// Cabeceras
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$arr_cabeceras = array(
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 50, 'titulo' => 'Cliente', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 15, 'titulo' => 'Personeria', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 30, 'titulo' => 'Condicion Iva', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 40, 'titulo' => 'Razon Social', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cuit', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 80, 'titulo' => 'Domicilio', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 50, 'titulo' => 'Telefono', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 40, 'titulo' => 'Email', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 10, 'titulo' => 'CP', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 30, 'titulo' => 'Pais', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 30, 'titulo' => 'Provincia', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 30, 'titulo' => 'Localidad', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 15, 'titulo' => 'Zona', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 30, 'titulo' => 'Grupo', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 30, 'titulo' => 'Categoria', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Estado', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 70, 'titulo' => 'Sucursales', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 70, 'titulo' => 'Vendedores', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 70, 'titulo' => 'Telefonos', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 70, 'titulo' => 'Emails', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 70, 'titulo' => 'Domicilios', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 70, 'titulo' => 'Centro Recepcions', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 70, 'titulo' => 'Centro Pedidos', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 70, 'titulo' => 'Medios Digital', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 70, 'titulo' => 'Exenciones Trib', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 40, 'titulo' => 'Rubros', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 17, 'titulo' => 'Estado Venta', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Tipo Gestion', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 17, 'titulo' => 'Periodicidad', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Fecha Creado', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 20, 'titulo' => 'Hora Creado', 'formato' => DbExcel::FORMATO_HORA),
    $columna++ => array('ancho' => 40, 'titulo' => 'Creado Por', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Fecha Modificado', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 20, 'titulo' => 'Hora Modificado', 'formato' => DbExcel::FORMATO_HORA),
    $columna++ => array('ancho' => 40, 'titulo' => 'Modificado Por', 'formato' => DbExcel::FORMATO_NINGUNO),
);

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Procesamiento de Datos
// -----------------------------------------------------------------------------
foreach ($cli_clientes as $cli_cliente) {
    
    $geo_localidad = $cli_cliente->getGeoLocalidad();
    $geo_provincia = $geo_localidad->getGeoProvincia();
    
    $sucursales = '';
    $gral_sucursals = $cli_cliente->getGralSucursalsXGralSucursalCliCliente();
    foreach ($gral_sucursals as $gral_sucursal) {
        $sucursales .= $gral_sucursal->getDescripcion();
        $sucursales .= Gral::REPORTES_SEPARADOR;
    }
    
    $vendedores = '';
    $vta_vendedors = $cli_cliente->getVtaVendedorsXCliClienteVtaVendedor();
    foreach ($vta_vendedors as $vta_vendedor) {
        $vendedores .= $vta_vendedor->getDescripcion();
        $vendedores .= Gral::REPORTES_SEPARADOR;
    }
    
    $telefonos = '';
    $cli_telefonos = $cli_cliente->getCliTelefonos();
    foreach ($cli_telefonos as $cli_telefono) {
        $telefonos .= $cli_telefono->getDescripcion();
        $telefonos .= Gral::REPORTES_SEPARADOR;
    }
    
    $emails = '';
    $cli_emails = $cli_cliente->getCliEmails();
    foreach ($cli_emails as $cli_email) {
        $emails .= $cli_email->getDescripcion();
        $emails .= Gral::REPORTES_SEPARADOR;
    }
    
    $domicilios = '';
    $cli_domicilios = $cli_cliente->getCliDomicilios();
    foreach ($cli_domicilios as $cli_domicilio) {
        $domicilios .= $cli_domicilio->getDescripcion();
        $domicilios .= Gral::REPORTES_SEPARADOR;
    }
    
    $centro_recepcions = '';
    $cli_centro_recepcions = $cli_cliente->getCliCentroRecepcions();
    foreach ($cli_centro_recepcions as $cli_centro_recepcion) {
        $centro_recepcions .= $cli_centro_recepcion->getDescripcion();
        $centro_recepcions .= Gral::REPORTES_SEPARADOR;
    }
    
    $centro_pedidos = '';
    $cli_centro_pedidos = $cli_cliente->getCliCentroPedidos();
    foreach ($cli_centro_pedidos as $cli_centro_pedido) {
        $centro_pedidos .= $cli_centro_pedido->getDescripcion();
        $centro_pedidos .= Gral::REPORTES_SEPARADOR;
    }
    
    $medio_digitals = '';
    $cli_medio_digitals = $cli_cliente->getCliMedioDigitals();
    foreach ($cli_medio_digitals as $cli_medio_digital) {
        $medio_digitals .= $cli_medio_digital->getDescripcion();
        $medio_digitals .= Gral::REPORTES_SEPARADOR;
    }
    
    $tributo_exencions = '';
    $vta_tributo_exencions = $cli_cliente->getVtaTributoExencions();
    foreach ($vta_tributo_exencions as $vta_tributo_exencion) {
        $tributo_exencions .= $vta_tributo_exencion->getDescripcion();
        $tributo_exencions .= ' desde ' . Gral::getFechaToWEB($vta_tributo_exencion->getFechaInicio());
        $tributo_exencions .= ' hasta ' . Gral::getFechaToWEB($vta_tributo_exencion->getFechaFin());
        $tributo_exencions .= Gral::REPORTES_SEPARADOR;
    }
    
    $rubros = '';
    $cli_rubros = $cli_cliente->getCliRubrosXCliClienteCliRubro();
    foreach ($cli_rubros as $cli_rubro) {
        $rubros .= $cli_rubro->getDescripcion();
        $rubros .= Gral::REPORTES_SEPARADOR;
    }
    
    $fila++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    $valor = $cli_cliente->getId();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $cli_cliente->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getGralTipoPersoneria()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getGralCondicionIva()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getRazonSocial();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getCuit();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getDomicilioLegal();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getTelefono();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getEmail();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getCodigoPostal();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $geo_provincia->getGeoPais()->getDescripcion();
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
    
    $valor = $cli_cliente->getCliGrupo()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getCliCategoria()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = GralSiNo::getOxId($cli_cliente->getEstado())->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $sucursales;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vendedores;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $telefonos;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $emails;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $domicilios;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $centro_recepcions;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $centro_pedidos;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $medio_digitals;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $tributo_exencions;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $rubros;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getCliClienteTipoEstadoVenta()->getDescripcionPublica();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getCliClienteTipoGestion()->getDescripcionPublica();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cli_cliente->getCliClientePeriodicidadGestion()->getDescripcionPublica();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = DbExcel::getFechaToFormula($cli_cliente->getCreado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = DbExcel::getHoraToFormula($cli_cliente->getCreado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = $cli_cliente->getCreadoPorDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = DbExcel::getFechaToFormula($cli_cliente->getModificado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = DbExcel::getHoraToFormula($cli_cliente->getModificado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = $cli_cliente->getModificadoPorDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Estilo y Formato
// -----------------------------------------------------------------------------
DbExcel::getEstiloMasivo($xls, $borde_style, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_XLS_CONFIG_ALTO_FILA);
DbExcel::getEstiloPersonalizado($xls, $arr_cabeceras, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_COLOR_ESTANDAR_FONDO_CABECERA, DB_COLOR_ESTANDAR_LETRA_CABECERA);

// -----------------------------------------------------------------------------
// Insertar Filtros
// -----------------------------------------------------------------------------
$ultima_columna = PHPExcel_Cell::stringFromColumnIndex($columna);
$primer_columna = PHPExcel_Cell::stringFromColumnIndex(DB_XLS_CONFIG_PRIMER_COLUMNA);
$xls->getActiveSheet()->setAutoFilter($primer_columna . DB_XLS_CONFIG_PRIMER_FILA . ':' . $ultima_columna . DB_XLS_CONFIG_PRIMER_FILA);

// -----------------------------------------------------------------------------
// Inmovilizar Filas y Columnas
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$columna_letra = PHPExcel_Cell::stringFromColumnIndex($columna);
$xls->getActiveSheet()->freezePane($columna_letra . (DB_XLS_CONFIG_PRIMER_FILA + 1));

// -----------------------------------------------------------------------------
// Generar Archivo de Salida
// -----------------------------------------------------------------------------
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . DbConfig::CONFIG_GRAL_CLIENTE_MIN . '-' . $db_nombre_pagina . '.xlsx"');
header('Cache-Control: max-age=0');

$oWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$oWriter->save('php://output');
exit;
?>