<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador_codigo = Gral::getVars(1, 'txt_buscador_codigo', '');
$txt_buscador_numero_nota_credito = Gral::getVars(1, 'txt_buscador_numero_nota_credito', '');
$txt_buscador_cae = Gral::getVars(1, 'txt_buscador_cae', '');

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");

$cmb_filtro_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_prv_proveedor_id', 0);
$cmb_filtro_pde_nota_credito_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_nota_credito_tipo_estado_id', 0);
$cmb_filtro_pde_tipo_nota_credito_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_tipo_nota_credito_id', 0);
$cmb_filtro_pde_tipo_origen_nota_credito_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pde_tipo_origen_nota_credito_id', 0);

$criterio = new Criterio(PdeNotaCredito::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
    $criterio->add('pde_nota_credito.fecha_emision', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('pde_nota_credito.fecha_emision', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
if (!empty($txt_buscador_codigo)) {
    $criterio->add('pde_nota_credito.codigo', $txt_buscador_codigo, Criterio::LIKE);
}
if (!empty($txt_buscador_numero_nota_credito)) {
    $criterio->add('pde_nota_credito.numero_nota_credito_completo', $txt_buscador_numero_nota_credito, Criterio::LIKE);
}
if (!empty($txt_buscador_cae)) {
    $criterio->add('pde_nota_credito.cae', $txt_buscador_cae, Criterio::LIKE);
}
if ($cmb_filtro_prv_proveedor_id != 0) {
    $criterio->add('pde_nota_credito.prv_proveedor_id', $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_nota_credito_tipo_estado_id != 0) {
    $criterio->add('pde_nota_credito.pde_nota_credito_tipo_estado_id', $cmb_filtro_pde_nota_credito_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_tipo_nota_credito_id != 0) {
    $criterio->add('pde_nota_credito.pde_tipo_nota_credito_id', $cmb_filtro_pde_tipo_nota_credito_id, Criterio::IGUAL);
}
if ($cmb_filtro_pde_tipo_origen_nota_credito_id != 0) {
    $criterio->add('pde_nota_credito.pde_tipo_origen_nota_credito_id', $cmb_filtro_pde_tipo_origen_nota_credito_id, Criterio::IGUAL);
}


$criterio->addFinSubconsulta();

if (!empty($txt_buscador)) {
    $criterio->addInicioSubconsulta();
    
    $criterio->add('pde_nota_credito.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('pde_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_nota_credito.numero_nota_credito_completo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_nota_credito.cae', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_nota_credito.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_nota_credito.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_nota_credito.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_nota_credito.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_nota_credito.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pde_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->addFinSubconsulta();
}

//$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_nota_credito.prv_proveedor_id', 'LEFT JOIN');
//$criterio->addRealJoin('pde_tipo_nota_credito', 'pde_tipo_nota_credito.id', 'pde_nota_credito.pde_tipo_nota_credito_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'pde_nota_credito.gral_condicion_iva_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'pde_nota_credito.gral_tipo_personeria_id', 'LEFT JOIN');
//$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'pde_nota_credito.gral_empresa_id', 'LEFT JOIN');
$criterio->addTabla('pde_nota_credito');
$criterio->setCriterios();
?>

