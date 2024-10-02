<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaVendedorDescuento::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaVendedorDescuento::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_vendedor_descuento.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_vendedor_descuento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_descuento.descuento_maximo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_descuento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_descuento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_etiqueta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_etiqueta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_etiqueta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_vendedor_descuento.vta_vendedor_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_etiqueta', 'ins_etiqueta.id', 'vta_vendedor_descuento.ins_etiqueta_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_vendedor_descuento');
$criterio->setCriterios();

