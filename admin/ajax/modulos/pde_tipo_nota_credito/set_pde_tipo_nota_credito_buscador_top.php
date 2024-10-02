<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeTipoNotaCredito::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeTipoNotaCredito::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_tipo_nota_credito.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_tipo_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_nota_credito.codigo_min', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_nota_credito.informa', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_nota_credito.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('pde_tipo_nota_credito');
$criterio->setCriterios();

