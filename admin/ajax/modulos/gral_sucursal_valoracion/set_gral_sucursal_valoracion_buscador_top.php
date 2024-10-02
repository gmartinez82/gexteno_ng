<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_gral_sucursal_valoracion_gral_sucursal_valoracion_agrupacion_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_gral_sucursal_valoracion_gral_sucursal_valoracion_agrupacion_id', 0);
$buscador_top_gral_sucursal_valoracion_gral_sucursal_valoracion_tipo_item_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_gral_sucursal_valoracion_gral_sucursal_valoracion_tipo_item_id', 0);
$buscador_top_gral_sucursal_valoracion_gral_sucursal_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_gral_sucursal_valoracion_gral_sucursal_id', 0);


$criterio = new Criterio(GralSucursalValoracion::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
GralSucursalValoracion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_gral_sucursal_valoracion_gral_sucursal_valoracion_agrupacion_id != 0) {
        $criterio->add('gral_sucursal_valoracion.gral_sucursal_valoracion_agrupacion_id', $buscador_top_gral_sucursal_valoracion_gral_sucursal_valoracion_agrupacion_id, Criterio::IGUAL);
    }
    if ($buscador_top_gral_sucursal_valoracion_gral_sucursal_valoracion_tipo_item_id != 0) {
        $criterio->add('gral_sucursal_valoracion.gral_sucursal_valoracion_tipo_item_id', $buscador_top_gral_sucursal_valoracion_gral_sucursal_valoracion_tipo_item_id, Criterio::IGUAL);
    }
    if ($buscador_top_gral_sucursal_valoracion_gral_sucursal_id != 0) {
        $criterio->add('gral_sucursal_valoracion.gral_sucursal_id', $buscador_top_gral_sucursal_valoracion_gral_sucursal_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('gral_sucursal_valoracion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_sucursal_valoracion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion.valoracion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion.session', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion.navegador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion.ip', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_tipo_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_tipo_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_tipo_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_sucursal_valoracion_agrupacion', 'gral_sucursal_valoracion_agrupacion.id', 'gral_sucursal_valoracion.gral_sucursal_valoracion_agrupacion_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_sucursal_valoracion_tipo_item', 'gral_sucursal_valoracion_tipo_item.id', 'gral_sucursal_valoracion.gral_sucursal_valoracion_tipo_item_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_valoracion.gral_sucursal_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'gral_sucursal_valoracion.cli_cliente_id', 'LEFT JOIN');
    
$criterio->addTabla('gral_sucursal_valoracion');
$criterio->setCriterios();

