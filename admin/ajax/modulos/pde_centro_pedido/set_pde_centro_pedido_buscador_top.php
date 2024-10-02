<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeCentroPedido::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeCentroPedido::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_centro_pedido.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_centro_pedido.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.responsable', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.domicilio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.empresa', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.url_dominio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.email_prefijo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'pde_centro_pedido.geo_localidad_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_centro_pedido');
$criterio->setCriterios();

