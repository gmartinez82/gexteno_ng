<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prv_proveedor_id', '');
$buscador_top_prv_proveedor_prv_tipo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prv_proveedor_prv_tipo_id', 0);
$buscador_top_prv_proveedor_gral_tipo_personeria_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prv_proveedor_gral_tipo_personeria_id', 0);
$buscador_top_prv_proveedor_gral_condicion_iva_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prv_proveedor_gral_condicion_iva_id', 0);
$buscador_top_prv_proveedor_prv_grupo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prv_proveedor_prv_grupo_id', 0);
$buscador_top_prv_proveedor_prv_categoria_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prv_proveedor_prv_categoria_id', 0);


$criterio = new Criterio(PrvProveedor::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PrvProveedor::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_prv_proveedor_id != '') {
        $criterio->add('prv_proveedor.id', $buscador_top_prv_proveedor_id, Criterio::IGUAL);
    }
    if ($buscador_top_prv_proveedor_prv_tipo_id != 0) {
        $criterio->add('prv_proveedor.prv_tipo_id', $buscador_top_prv_proveedor_prv_tipo_id, Criterio::IGUAL);
    }
    if ($buscador_top_prv_proveedor_gral_tipo_personeria_id != 0) {
        $criterio->add('prv_proveedor.gral_tipo_personeria_id', $buscador_top_prv_proveedor_gral_tipo_personeria_id, Criterio::IGUAL);
    }
    if ($buscador_top_prv_proveedor_gral_condicion_iva_id != 0) {
        $criterio->add('prv_proveedor.gral_condicion_iva_id', $buscador_top_prv_proveedor_gral_condicion_iva_id, Criterio::IGUAL);
    }
    if ($buscador_top_prv_proveedor_prv_grupo_id != 0) {
        $criterio->add('prv_proveedor.prv_grupo_id', $buscador_top_prv_proveedor_prv_grupo_id, Criterio::IGUAL);
    }
    if ($buscador_top_prv_proveedor_prv_categoria_id != 0) {
        $criterio->add('prv_proveedor.prv_categoria_id', $buscador_top_prv_proveedor_prv_categoria_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('prv_proveedor.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prv_proveedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.codigo_postal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.codigo_min', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.puntaje_promedio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.datos_migracion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.claves', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_tipo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_tipo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_tipo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_grupo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_grupo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_grupo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_categoria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_categoria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_categoria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('prv_tipo', 'prv_tipo.id', 'prv_proveedor.prv_tipo_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'prv_proveedor.gral_tipo_personeria_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'prv_proveedor.gral_condicion_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'prv_proveedor.geo_localidad_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_grupo', 'prv_grupo.id', 'prv_proveedor.prv_grupo_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_categoria', 'prv_categoria.id', 'prv_proveedor.prv_categoria_id', 'LEFT JOIN');
    
$criterio->addTabla('prv_proveedor');
$criterio->setCriterios();

