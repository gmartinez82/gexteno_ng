<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(InsInsumoBultoInsTipoListaPrecio::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
InsInsumoBultoInsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('ins_insumo_bulto_ins_tipo_lista_precio.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_insumo_bulto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_bulto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_bulto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.id', 'ins_insumo_bulto_ins_tipo_lista_precio.ins_insumo_bulto_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'ins_insumo_bulto_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'LEFT JOIN');
    
$criterio->addTabla('ins_insumo_bulto_ins_tipo_lista_precio');
$criterio->setCriterios();

