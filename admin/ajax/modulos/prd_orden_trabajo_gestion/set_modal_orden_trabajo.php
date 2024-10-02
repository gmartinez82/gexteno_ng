<?php

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$prd_orden_trabajo_id = Gral::getVars(Gral::VARS_GET, 'prd_orden_trabajo_id', 0, Gral::TIPO_INTEGER);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$cmb_ins_insumo_id = Gral::getVars(Gral::VARS_POST, 'cmb_ins_insumo_id', 0, Gral::TIPO_INTEGER);
$txt_cantidad = Gral::getVars(Gral::VARS_POST, 'txt_cantidad', 0, Gral::TIPO_INTEGER);
$cmb_prd_prioridad_id = Gral::getVars(Gral::VARS_POST, 'cmb_prd_prioridad_id', 0, Gral::TIPO_INTEGER);
$cmb_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_cli_cliente_id', 0, Gral::TIPO_INTEGER);
$txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '', Gral::TIPO_STRING);

/*
Gral::pr($cmb_ins_insumo_id, 'cmb_ins_insumo_id');
Gral::pr($txt_cantidad, 'txt_cantidad');
Gral::pr($cmb_prd_prioridad_id, 'cmb_prd_prioridad_id');
Gral::pr($cmb_cli_cliente_id, 'cmb_cli_cliente_id');
Gral::pr($txa_observacion, 'txa_observacion');
exit;
*/

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;

if ( $cmb_ins_insumo_id == 0 )
{
    $arr['cmb_ins_insumo_id'] = Lang::_lang('Debe seleccionar un insumo', true);
    $arr['error'] = true;
}

if ( $cmb_prd_prioridad_id == 0 )
{
    $arr['cmb_prd_prioridad_id'] = Lang::_lang('Debe seleccionar una prioridad', true);
    $arr['error'] = true;
}

if ( ! $arr['error'] )
{
    $prd_tipo_origen = PrdTipoOrigen::getOxCodigo(PrdTipoOrigen::TIPO_ORIGEN_MANUAL);
    
    PrdOrdenTrabajo::setInicializarOrdenTrabajo($prd_orden_trabajo_id, $cmb_ins_insumo_id, $cmb_prd_prioridad_id, $prd_tipo_origen->getId(), $cmb_cli_cliente_id, $txt_cantidad, $txa_observacion, false, false);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
