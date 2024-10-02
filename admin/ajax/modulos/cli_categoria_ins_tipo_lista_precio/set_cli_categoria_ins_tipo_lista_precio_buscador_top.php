<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CliCategoriaInsTipoListaPrecio::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CliCategoriaInsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cli_categoria_ins_tipo_lista_precio.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cli_categoria_ins_tipo_lista_precio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria_ins_tipo_lista_precio.predeterminado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria_ins_tipo_lista_precio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria_ins_tipo_lista_precio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria_ins_tipo_lista_precio.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_tipo_lista_precio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_categoria_ins_tipo_lista_precio.cli_categoria_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'cli_categoria_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'LEFT JOIN');
    
$criterio->addTabla('cli_categoria_ins_tipo_lista_precio');
$criterio->setCriterios();

