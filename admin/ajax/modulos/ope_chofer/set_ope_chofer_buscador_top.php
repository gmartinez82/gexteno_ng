<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(OpeChofer::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
OpeChofer::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ope_chofer.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ope_chofer.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.celular', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('ope_chofer');
$criterio->setCriterios();

