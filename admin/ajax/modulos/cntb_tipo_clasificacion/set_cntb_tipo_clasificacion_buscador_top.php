<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CntbTipoClasificacion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CntbTipoClasificacion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cntb_tipo_clasificacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cntb_tipo_clasificacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_clasificacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_clasificacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('cntb_tipo_clasificacion');
$criterio->setCriterios();

