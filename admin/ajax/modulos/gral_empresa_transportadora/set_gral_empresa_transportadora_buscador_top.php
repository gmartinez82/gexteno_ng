<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GralEmpresaTransportadora::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GralEmpresaTransportadora::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gral_empresa_transportadora.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_empresa_transportadora.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.documento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.domicilio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.publica', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('gral_empresa_transportadora');
$criterio->setCriterios();

