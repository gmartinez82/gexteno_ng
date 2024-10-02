<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeNotaCreditoImagen::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeNotaCreditoImagen::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_nota_credito_imagen.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_nota_credito_imagen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_imagen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_imagen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_imagen.archivo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_imagen.peso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_imagen.tipo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_imagen.alto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_imagen.ancho', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'pde_nota_credito_imagen.pde_nota_credito_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_nota_credito_imagen');
$criterio->setCriterios();

