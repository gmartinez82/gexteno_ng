<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(InsInsumoPanPanol::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
InsInsumoPanPanol::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ins_insumo_pan_panol.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_insumo_pan_panol.punto_minimo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_pan_panol.punto_pedido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_pan_panol.punto_maximo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_piso.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_piso.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_piso.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_pasillo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_pasillo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_pasillo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_estante.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_estante.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_estante.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_altura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_altura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_altura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_casillero.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_casillero.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_casillero.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_celda.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_celda.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_ubi_celda.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_clasificacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_clasificacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_clasificacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_pan_panol.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_insumo_pan_panol.pan_panol_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_ubi_piso', 'pan_ubi_piso.id', 'ins_insumo_pan_panol.pan_ubi_piso_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_ubi_pasillo', 'pan_ubi_pasillo.id', 'ins_insumo_pan_panol.pan_ubi_pasillo_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_ubi_estante', 'pan_ubi_estante.id', 'ins_insumo_pan_panol.pan_ubi_estante_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_ubi_altura', 'pan_ubi_altura.id', 'ins_insumo_pan_panol.pan_ubi_altura_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_ubi_casillero', 'pan_ubi_casillero.id', 'ins_insumo_pan_panol.pan_ubi_casillero_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_ubi_celda', 'pan_ubi_celda.id', 'ins_insumo_pan_panol.pan_ubi_celda_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_clasificacion', 'ins_clasificacion.id', 'ins_insumo_pan_panol.ins_clasificacion_id', 'LEFT JOIN');
    
$criterio->addTabla('ins_insumo_pan_panol');
$criterio->setCriterios();

