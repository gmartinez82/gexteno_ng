<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_eku_de_ope_estado_eku_de_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_eku_de_ope_estado_eku_de_id', 0);
$buscador_top_eku_de_ope_estado_eku_de_ope_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_eku_de_ope_estado_eku_de_ope_tipo_estado_id', 0);


$criterio = new Criterio(EkuDeOpeEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeOpeEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_eku_de_ope_estado_eku_de_id != 0) {
        $criterio->add('eku_de_ope_estado.eku_de_id', $buscador_top_eku_de_ope_estado_eku_de_id, Criterio::IGUAL);
    }
    if ($buscador_top_eku_de_ope_estado_eku_de_ope_tipo_estado_id != 0) {
        $criterio->add('eku_de_ope_estado.eku_de_ope_tipo_estado_id', $buscador_top_eku_de_ope_estado_eku_de_ope_tipo_estado_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_ope_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_ope_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ope_estado.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ope_estado.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ope_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ope_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ope_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ope_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ope_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ope_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_ope_estado.eku_de_id', 'LEFT JOIN');
$criterio->addRealJoin('eku_de_ope_tipo_estado', 'eku_de_ope_tipo_estado.id', 'eku_de_ope_estado.eku_de_ope_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_ope_estado');
$criterio->setCriterios();

