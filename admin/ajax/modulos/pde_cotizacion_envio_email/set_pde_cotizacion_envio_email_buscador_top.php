<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeCotizacionEnvioEmail::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeCotizacionEnvioEmail::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_cotizacion_envio_email.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_cotizacion_envio_email.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_envio_email.asunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_envio_email.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_envio_email.cuerpo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_envio_email.adjunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_envio_email.codigo_envio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_envio_email.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_envio_email.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_envio_email.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_destinatario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_destinatario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_destinatario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.id', 'pde_cotizacion_envio_email.pde_cotizacion_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_cotizacion_destinatario', 'pde_cotizacion_destinatario.id', 'pde_cotizacion_envio_email.pde_cotizacion_destinatario_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_cotizacion_envio_email');
$criterio->setCriterios();

