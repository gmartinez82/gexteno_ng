<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GenArbol::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GenArbol::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gen_arbol.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gen_arbol.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_arbol.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_arbol.php_clase', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_arbol.bd_tabla', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_arbol.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_arbol.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_arbol_tipo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_arbol_tipo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_arbol_tipo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gen_arbol_tipo', 'gen_arbol_tipo.id', 'gen_arbol.gen_arbol_tipo_id', 'LEFT JOIN');
    
$criterio->addTabla('gen_arbol');
$criterio->setCriterios();

