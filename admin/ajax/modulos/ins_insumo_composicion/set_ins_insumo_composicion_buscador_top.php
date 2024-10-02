<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_ins_insumo_composicion_ins_insumo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_ins_insumo_composicion_ins_insumo_id', 0);
$buscador_top_ins_insumo_composicion_ins_insumo_composicion = Gral::getVars(Gral::VARS_POST, 'buscador_top_ins_insumo_composicion_ins_insumo_composicion', 0);


$criterio = new Criterio(InsInsumoComposicion::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
InsInsumoComposicion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_ins_insumo_composicion_ins_insumo_id != 0) {
        $criterio->add('ins_insumo_composicion.ins_insumo_id', $buscador_top_ins_insumo_composicion_ins_insumo_id, Criterio::IGUAL);
    }
    if ($buscador_top_ins_insumo_composicion_ins_insumo_composicion != 0) {
        $criterio->add('ins_insumo_composicion.ins_insumo_composicion', $buscador_top_ins_insumo_composicion_ins_insumo_composicion, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('ins_insumo_composicion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_insumo_composicion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_composicion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_composicion.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_composicion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_composicion.ins_insumo_id', 'LEFT JOIN');
    
$criterio->addTabla('ins_insumo_composicion');
$criterio->setCriterios();

