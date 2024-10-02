<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(Gral::VARS_POST, 'txt_buscador');
$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");
$cmb_filtro_vta_presupuesto_estado = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_presupuesto_estado', 0);
$cmb_filtro_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_cli_cliente_id', 0);
$cmb_filtro_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_vta_vendedor_id', 0);

$criterio = new Criterio(VtaPresupuestoConflicto::SES_CRITERIOS);

$criterio->setAmbiguo(false);
$criterio->addDistinct(true);


$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if ($txt_filtro_desde != "") {
//    $criterio->add('vta_presupuesto_conflicto.creado', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
    $criterio->add('vta_presupuesto.fecha', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != "") {
//    $criterio->add('vta_presupuesto_conflicto.creado', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
    $criterio->add('vta_presupuesto.fecha', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}

if ($cmb_filtro_vta_presupuesto_estado != 0) {
    $estado = ($cmb_filtro_vta_presupuesto_estado == 1) ? 1 : 0;
    $resuelto = ($cmb_filtro_vta_presupuesto_estado == 1) ? 0 : 1;
    $criterio->add('vta_presupuesto_conflicto.resuelto', $resuelto, Criterio::IGUAL);
}
if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add('vta_presupuesto.cli_cliente_id', $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}
if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add('vta_presupuesto.vta_vendedor_id', $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();


if ($txt_buscador != '') {
    $criterio->addInicioSubconsulta();
    $criterio->add('vta_presupuesto_conflicto.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('vta_presupuesto_conflicto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_presupuesto_conflicto.importe_inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_presupuesto_conflicto.importe_actualizado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_presupuesto_conflicto.importe_resuelto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_presupuesto_conflicto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_presupuesto_conflicto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->add('vta_presupuesto_ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_presupuesto_ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_presupuesto_ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->add('vta_presupuesto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('vta_presupuesto.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->addFinSubconsulta();
}
//$r = VtaPresupuestoConflicto::getVtaPresupuestoConflictos();
$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.id', 'vta_presupuesto_conflicto.vta_presupuesto_ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'LEFT JOIN');

$criterio->addTabla('vta_presupuesto_conflicto');
$criterio->setCriterios();
?>

