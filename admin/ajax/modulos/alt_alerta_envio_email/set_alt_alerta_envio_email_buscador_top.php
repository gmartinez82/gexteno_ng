<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AltAlertaEnvioEmail::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AltAlertaEnvioEmail::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('alt_alerta_envio_email.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('alt_alerta_envio_email.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta_envio_email.asunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta_envio_email.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta_envio_email.cuerpo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta_envio_email.adjunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta_envio_email.codigo_envio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta_envio_email.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta_envio_email.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta_envio_email.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('alt_alerta', 'alt_alerta.id', 'alt_alerta_envio_email.alt_alerta_id', 'LEFT JOIN');
$criterio->addRealJoin('alt_alerta_us_usuario', 'alt_alerta_us_usuario.id', 'alt_alerta_envio_email.alt_alerta_us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('alt_alerta_envio_email');
$criterio->setCriterios();

