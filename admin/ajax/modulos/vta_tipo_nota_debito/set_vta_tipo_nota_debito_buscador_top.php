<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaTipoNotaDebito::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaTipoNotaDebito::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_tipo_nota_debito.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_tipo_nota_debito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_nota_debito.codigo_min', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_nota_debito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_nota_debito.informa', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_nota_debito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_nota_debito.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('vta_tipo_nota_debito');
$criterio->setCriterios();

