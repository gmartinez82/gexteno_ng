<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(InsTipoListaPrecio::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
InsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('ins_tipo_lista_precio.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_tipo_lista_precio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.descripcion_corta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.porcentaje_incremento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.importe_minimo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.incluye_logistica', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.bulto_cerrado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.porcentaje_comision', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.porcentaje_logistica', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.porcentaje_descuento_maximo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.por_default', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('ins_tipo_lista_precio');
$criterio->setCriterios();

