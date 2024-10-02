<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CliTipoMedioDigital::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CliTipoMedioDigital::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cli_tipo_medio_digital.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cli_tipo_medio_digital.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_tipo_medio_digital.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_tipo_medio_digital.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_tipo_medio_digital.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('cli_tipo_medio_digital');
$criterio->setCriterios();

