<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeOrdenPagoEnviado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeOrdenPagoEnviado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_orden_pago_enviado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_orden_pago_enviado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_enviado.asunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_enviado.destinatario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_enviado.cuerpo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_enviado.adjunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_enviado.codigo_envio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_enviado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_enviado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_enviado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_orden_pago_enviado.pde_orden_pago_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_orden_pago_enviado');
$criterio->setCriterios();

