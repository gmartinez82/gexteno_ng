<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(NotTipoArchivo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
NotTipoArchivo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('not_tipo_archivo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('not_tipo_archivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_tipo_archivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_tipo_archivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('not_tipo_archivo');
$criterio->setCriterios();

