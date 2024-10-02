<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeReciboImagen::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeReciboImagen::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_recibo_imagen.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_recibo_imagen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_imagen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_imagen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_imagen.archivo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_imagen.peso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_imagen.tipo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_imagen.alto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_imagen.ancho', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_recibo', 'pde_recibo.id', 'pde_recibo_imagen.pde_recibo_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_recibo_imagen');
$criterio->setCriterios();

