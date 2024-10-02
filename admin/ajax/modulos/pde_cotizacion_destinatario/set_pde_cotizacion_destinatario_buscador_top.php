<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeCotizacionDestinatario::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeCotizacionDestinatario::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_cotizacion_destinatario.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_cotizacion_destinatario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_destinatario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion_destinatario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_cotizacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.id', 'pde_cotizacion_destinatario.pde_cotizacion_id', 'LEFT JOIN');
$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pde_cotizacion_destinatario.us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_cotizacion_destinatario');
$criterio->setCriterios();

