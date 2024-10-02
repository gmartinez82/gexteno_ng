<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AltTipo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AltTipo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('alt_tipo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('alt_tipo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_tipo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_tipo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('alt_tipo');
$criterio->setCriterios();

