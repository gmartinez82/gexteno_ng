<?php

include "_autoload.php";

$txt_buscador_productos_modal = Gral::getVars(Gral::VARS_GET, 'txt_buscador_productos_modal', '', Gral::TIPO_STRING);


// consulta de precios de productos
$c = new Criterio('GEX_VTA_PRESUPUESTO_BUSCADOR');

$c->add('ins_insumo.estado', 1, Criterio::IGUAL);
$c->add('ins_insumo.es_vendible', 1, Criterio::IGUAL);

if ($txt_buscador_productos_modal != '') {
    $c->addInicioSubconsulta();
    $c->add('ins_insumo.descripcion', $txt_buscador_productos_modal, Criterio::LIKE);
    $c->add('ins_insumo.codigo', $txt_buscador_productos_modal, Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_insumo.codigo_interno', $txt_buscador_productos_modal, Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_insumo.claves', $txt_buscador_productos_modal, Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_marca.descripcion', $txt_buscador_productos_modal, Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->addTabla('ins_insumo');
$c->addRealJoin('ins_marca', 'ins_marca.id', 'ins_insumo.ins_marca_id', 'LEFT JOIN');
$c->addOrden('ins_insumo.descripcion');
$c->setCriterios();
