<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_vta_vendedor_valoracion_vta_vendedor_valoracion_agrupacion_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_vta_vendedor_valoracion_vta_vendedor_valoracion_agrupacion_id', 0);
$buscador_top_vta_vendedor_valoracion_vta_vendedor_valoracion_tipo_item_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_vta_vendedor_valoracion_vta_vendedor_valoracion_tipo_item_id', 0);
$buscador_top_vta_vendedor_valoracion_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_vta_vendedor_valoracion_vta_vendedor_id', 0);


$criterio = new Criterio(VtaVendedorValoracion::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
VtaVendedorValoracion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_vta_vendedor_valoracion_vta_vendedor_valoracion_agrupacion_id != 0) {
        $criterio->add('vta_vendedor_valoracion.vta_vendedor_valoracion_agrupacion_id', $buscador_top_vta_vendedor_valoracion_vta_vendedor_valoracion_agrupacion_id, Criterio::IGUAL);
    }
    if ($buscador_top_vta_vendedor_valoracion_vta_vendedor_valoracion_tipo_item_id != 0) {
        $criterio->add('vta_vendedor_valoracion.vta_vendedor_valoracion_tipo_item_id', $buscador_top_vta_vendedor_valoracion_vta_vendedor_valoracion_tipo_item_id, Criterio::IGUAL);
    }
    if ($buscador_top_vta_vendedor_valoracion_vta_vendedor_id != 0) {
        $criterio->add('vta_vendedor_valoracion.vta_vendedor_id', $buscador_top_vta_vendedor_valoracion_vta_vendedor_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('vta_vendedor_valoracion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_vendedor_valoracion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion.valoracion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion.session', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion.navegador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion.ip', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_agrupacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_agrupacion.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_agrupacion.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_tipo_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_tipo_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_tipo_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_vendedor_valoracion_agrupacion', 'vta_vendedor_valoracion_agrupacion.id', 'vta_vendedor_valoracion.vta_vendedor_valoracion_agrupacion_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_vendedor_valoracion_tipo_item', 'vta_vendedor_valoracion_tipo_item.id', 'vta_vendedor_valoracion.vta_vendedor_valoracion_tipo_item_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_vendedor_valoracion.vta_vendedor_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_vendedor_valoracion.cli_cliente_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_vendedor_valoracion');
$criterio->setCriterios();

