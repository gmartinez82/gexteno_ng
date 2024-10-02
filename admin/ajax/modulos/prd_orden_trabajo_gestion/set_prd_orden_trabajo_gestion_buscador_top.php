<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_prd_orden_trabajo_vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_vta_presupuesto_id', 0);
$buscador_top_prd_orden_trabajo_vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_vta_presupuesto_ins_insumo_id', 0);
$buscador_top_prd_orden_trabajo_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_cli_cliente_id', 0);
$buscador_top_prd_orden_trabajo_prd_tipo_origen_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_prd_tipo_origen_id', 0);
$buscador_top_prd_orden_trabajo_prd_proceso_productivo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_prd_proceso_productivo_id', 0);
$buscador_top_prd_orden_trabajo_prd_prioridad_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_prd_prioridad_id', 0);
$buscador_top_prd_orden_trabajo_ins_insumo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_ins_insumo_id', 0);
$buscador_top_prd_orden_trabajo_prd_orden_trabajo_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_prd_orden_trabajo_tipo_estado_id', 0);


$criterio = new Criterio(PrdOrdenTrabajo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_prd_orden_trabajo_vta_presupuesto_id != 0) {
        $criterio->add('prd_orden_trabajo.vta_presupuesto_id', $buscador_top_prd_orden_trabajo_vta_presupuesto_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_orden_trabajo_vta_presupuesto_ins_insumo_id != 0) {
        $criterio->add('prd_orden_trabajo.vta_presupuesto_ins_insumo_id', $buscador_top_prd_orden_trabajo_vta_presupuesto_ins_insumo_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_orden_trabajo_cli_cliente_id != 0) {
        $criterio->add('prd_orden_trabajo.cli_cliente_id', $buscador_top_prd_orden_trabajo_cli_cliente_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_orden_trabajo_prd_tipo_origen_id != 0) {
        $criterio->add('prd_orden_trabajo.prd_tipo_origen_id', $buscador_top_prd_orden_trabajo_prd_tipo_origen_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_orden_trabajo_prd_proceso_productivo_id != 0) {
        $criterio->add('prd_orden_trabajo.prd_proceso_productivo_id', $buscador_top_prd_orden_trabajo_prd_proceso_productivo_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_orden_trabajo_prd_prioridad_id != 0) {
        $criterio->add('prd_orden_trabajo.prd_prioridad_id', $buscador_top_prd_orden_trabajo_prd_prioridad_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_orden_trabajo_ins_insumo_id != 0) {
        $criterio->add('prd_orden_trabajo.ins_insumo_id', $buscador_top_prd_orden_trabajo_ins_insumo_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_orden_trabajo_prd_orden_trabajo_tipo_estado_id != 0) {
        $criterio->add('prd_orden_trabajo.prd_orden_trabajo_tipo_estado_id', $buscador_top_prd_orden_trabajo_prd_orden_trabajo_tipo_estado_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('prd_orden_trabajo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prd_orden_trabajo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_tipo_origen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_tipo_origen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_tipo_origen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_prioridad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_prioridad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_prioridad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'prd_orden_trabajo.vta_presupuesto_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.id', 'prd_orden_trabajo.vta_presupuesto_ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'prd_orden_trabajo.cli_cliente_id', 'LEFT JOIN');
$criterio->addRealJoin('prd_tipo_origen', 'prd_tipo_origen.id', 'prd_orden_trabajo.prd_tipo_origen_id', 'LEFT JOIN');
$criterio->addRealJoin('prd_proceso_productivo', 'prd_proceso_productivo.id', 'prd_orden_trabajo.prd_proceso_productivo_id', 'LEFT JOIN');
$criterio->addRealJoin('prd_prioridad', 'prd_prioridad.id', 'prd_orden_trabajo.prd_prioridad_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'prd_orden_trabajo.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('prd_orden_trabajo_tipo_estado', 'prd_orden_trabajo_tipo_estado.id', 'prd_orden_trabajo.prd_orden_trabajo_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('prd_orden_trabajo');
$criterio->setCriterios();

