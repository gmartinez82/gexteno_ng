<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeOcReclamoEnvioEmail::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeOcReclamoEnvioEmail::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_oc_reclamo_envio_email.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_oc_reclamo_envio_email.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo_envio_email.asunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo_envio_email.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo_envio_email.cuerpo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo_envio_email.adjunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo_envio_email.codigo_envio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo_envio_email.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo_envio_email.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo_envio_email.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo_destinatario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo_destinatario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_reclamo_destinatario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_oc_reclamo', 'pde_oc_reclamo.id', 'pde_oc_reclamo_envio_email.pde_oc_reclamo_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_oc_reclamo_destinatario', 'pde_oc_reclamo_destinatario.id', 'pde_oc_reclamo_envio_email.pde_oc_reclamo_destinatario_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_oc_reclamo_envio_email');
$criterio->setCriterios();

