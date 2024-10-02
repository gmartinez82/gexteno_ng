<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdiPedidoAgrupacionEnviado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdiPedidoAgrupacionEnviado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pdi_pedido_agrupacion_enviado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pdi_pedido_agrupacion_enviado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_enviado.asunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_enviado.destinatario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_enviado.cuerpo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_enviado.adjunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_enviado.codigo_envio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_enviado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_enviado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion_enviado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pdi_pedido_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pdi_pedido_agrupacion', 'pdi_pedido_agrupacion.id', 'pdi_pedido_agrupacion_enviado.pdi_pedido_agrupacion_id', 'LEFT JOIN');
    
$criterio->addTabla('pdi_pedido_agrupacion_enviado');
$criterio->setCriterios();

