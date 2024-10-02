<?php

include_once '_autoload.php';
$user = UsUsuario::autenticado();

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');

$cmb_filtro_gral_empresa_id = Gral::getVars(1, "cmb_filtro_gral_empresa_id", 0);
$cmb_filtro_co_centro_operativo_id = Gral::getVars(1, "cmb_filtro_co_centro_operativo_id", 0);
$cmb_filtro_per_tipo_estado_id = Gral::getVars(1, "cmb_filtro_per_tipo_estado_id", 0);
$cmb_filtro_control_horario = Gral::getVars(1, "cmb_filtro_control_horario", -1);
$cmb_filtro_gral_area_id = Gral::getVars(1, "cmb_filtro_gral_area_id", 0);
$cmb_filtro_gral_sector_id = Gral::getVars(1, "cmb_filtro_gral_sector_id", 0);
$cmb_filtro_gral_puesto_id = Gral::getVars(1, "cmb_filtro_gral_puesto_id", 0);
$txt_filtro_fecha_desde = Gral::getVars(1, 'txt_filtro_fecha_desde', '');

$txt_filtro_fecha_desde = Gral::getFechaToDB($txt_filtro_fecha_desde);

if (Ctrl::esFechaValida($txt_filtro_fecha_desde)) {
    PerPersona::setSesFiltroFechaDesde($txt_filtro_fecha_desde);
}

$criterio = new Criterio(PerPersona::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);
$criterio->setWhereInit(true);
$criterio->addTrueInicialEnWhere();

$criterio->addInicioSubconsulta();
$criterio->add("", "true", "", false, "AND");

if ($cmb_filtro_gral_empresa_id != 0) {
    $criterio->add(GralEmpresa::GEN_ATTR_ID, $cmb_filtro_gral_empresa_id, Criterio::IGUAL);
}

if ($cmb_filtro_per_tipo_estado_id != 0) {
    $criterio->add(PerTipoEstado::GEN_ATTR_ID, $cmb_filtro_per_tipo_estado_id, Criterio::IGUAL);
}

if ($cmb_filtro_control_horario != -1) {
    $criterio->add(PerPersona::GEN_ATTR_CONTROL_HORARIO, $cmb_filtro_control_horario, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if ($txt_buscador != '') {
    $criterio->addInicioSubconsulta();
    $criterio->add(PerPersona::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add(PerPersona::GEN_ATTR_LEGAJO, $txt_buscador, Criterio::IGUAL, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin(GralEmpresa::GEN_TABLA, GralEmpresa::GEN_ATTR_ID, PerPersona::GEN_ATTR_GRAL_EMPRESA_ID, 'LEFT JOIN');
$criterio->addRealJoin(PerTipoEstado::GEN_TABLA, PerTipoEstado::GEN_ATTR_ID, PerPersona::GEN_ATTR_PER_TIPO_ESTADO_ID, 'LEFT JOIN');

$criterio->addTabla(PerPersona::GEN_TABLA);
$criterio->addOrden(PerPersona::GEN_ATTR_DESCRIPCION, Criterio::_ASC);

$criterio = $user->getFiltrosEspeciales(PerPersona::GEN_TABLA, $criterio);
//$criterio->setCriteriosBuscador();
$criterio->setCriterios();
?>