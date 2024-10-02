<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$txt_buscador = Gral::getVars(1, 'txt_buscador', "");

$cmb_filtro_gral_empresa_id        = Gral::getVars(1, "cmb_filtro_gral_empresa_id", 0);
$cmb_filtro_per_tipo_estado_id     = Gral::getVars(1, "cmb_filtro_per_tipo_estado_id", 0);
$txt_filtro_legajo                 = Gral::getVars(1, 'txt_filtro_legajo', "");

$criterio = new Criterio(PerPersona::SES_CRITERIOS);
$criterio->addDistinct(true);
$criterio->setAmbiguo(true);
$criterio->addTrueInicialEnWhere();

$criterio->addInicioSubconsulta();
$criterio->addTrueInicialEnWhere();

if($cmb_filtro_gral_empresa_id != 0){
    $criterio->add(GralEmpresa::GEN_ATTR_ID, $cmb_filtro_gral_empresa_id, Criterio::IGUAL);
}

if($cmb_filtro_per_tipo_estado_id != 0){
    $criterio->add(PerTipoEstado::GEN_ATTR_ID, $cmb_filtro_per_tipo_estado_id, Criterio::IGUAL);
}

if($txt_filtro_legajo != ""){
    $criterio->add(PerPersona::GEN_ATTR_LEGAJO, $txt_filtro_legajo, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if($txt_buscador != ""){
    $criterio->addInicioSubconsulta();

    $criterio->add(PerPersona::GEN_ATTR_LEGAJO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add(PerPersona::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(PerPersona::GEN_ATTR_DOCUMENTO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(PerPersona::GEN_ATTR_APELLIDO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(PerPersona::GEN_ATTR_NOMBRE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(PerPersona::GEN_ATTR_CUIL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(PerPersona::GEN_ATTR_NACIONALIDAD, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(PerPersona::GEN_ATTR_CODIGO_CREDENCIAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(GralEmpresa::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(GralSexo::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(GeoLocalidad::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(PerTipoEstado::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    
    $criterio->addFinSubconsulta();
}


$criterio->addRealJoin(GralEmpresa::GEN_TABLA, GralEmpresa::GEN_ATTR_ID, PerPersona::GEN_ATTR_GRAL_EMPRESA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralTipoDocumento::GEN_TABLA, GralTipoDocumento::GEN_ATTR_ID, PerPersona::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralSexo::GEN_TABLA, GralSexo::GEN_ATTR_ID, PerPersona::GEN_ATTR_GRAL_SEXO_ID, 'LEFT JOIN');
$criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, PerPersona::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(PerTipoEstado::GEN_TABLA, PerTipoEstado::GEN_ATTR_ID, PerPersona::GEN_ATTR_PER_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->addTabla(PerPersona::GEN_TABLA);
//$criterio = $user->getFiltrosEspeciales(PerPersona::GEN_TABLA, $criterio);
$criterio->setCriterios();

?>