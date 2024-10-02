<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PrvPreventista::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PrvPreventista::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('prv_preventista.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prv_preventista.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_preventista.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_preventista.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_preventista.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_preventista.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_preventista.celular', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_preventista.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_preventista.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_preventista.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_preventista.prv_proveedor_id', 'LEFT JOIN');
    
$criterio->addTabla('prv_preventista');
$criterio->setCriterios();

