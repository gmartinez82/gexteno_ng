<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_ope_operario_per_persona_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_ope_operario_per_persona_id', 0);


$criterio = new Criterio(OpeOperario::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
OpeOperario::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_ope_operario_per_persona_id != 0) {
        $criterio->add('ope_operario.per_persona_id', $buscador_top_ope_operario_per_persona_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('ope_operario.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ope_operario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('per_persona', 'per_persona.id', 'ope_operario.per_persona_id', 'LEFT JOIN');
    
$criterio->addTabla('ope_operario');
$criterio->setCriterios();

