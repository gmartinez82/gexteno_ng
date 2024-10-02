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
$cmb_prd_proceso_productivo_id = Gral::getVars(Gral::VARS_POST, 'cmb_prd_proceso_productivo_id', 0, Gral::TIPO_INTEGER);
$cmb_prd_linea_produccion_ids = Gral::getVars(Gral::VARS_POST, 'cmb_prd_linea_produccion_id', 0, Gral::TIPO_INTEGER);
$cmb_prd_prioridad_id = Gral::getVars(Gral::VARS_POST, 'cmb_prd_prioridad_id', 0, Gral::TIPO_INTEGER);
$cmb_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cmb_cli_cliente_id', 0, Gral::TIPO_INTEGER);
$cmb_ope_operario_id = Gral::getVars(Gral::VARS_POST, 'cmb_ope_operario_id', 0, Gral::TIPO_INTEGER);

//Gral::pr($cmb_prd_proceso_productivo_id, 'cmb_prd_proceso_productivo_id');
//Gral::pr($cmb_prd_prioridad_id, 'cmb_prd_prioridad_id');
//Gral::pr($cmb_cli_cliente_id, 'cmb_cli_cliente_id');
//Gral::pr($cmb_ope_operario_id, 'cmb_ope_operario_id');
//Gral::prr($cmb_prd_linea_produccion_ids);

$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($prd_orden_trabajo_id);
$prd_proceso_productivo = PrdProcesoProductivo::getOxId($cmb_prd_proceso_productivo_id);
//Gral::prr($prd_proceso_productivo);exit;

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr['error'] = false;

if ( $cmb_prd_proceso_productivo_id == 0 )
{
    $arr['cmb_prd_proceso_productivo_id'] = Lang::_lang('Debe seleccionar un proceso productivo', true);
    $arr['error'] = true;
}
else
{
    //Gral::prr($prd_proceso_productivo);
    if ( ! $prd_proceso_productivo->getConfigurado() )
    {
        $arr['cmb_prd_proceso_productivo_id'] = Lang::_lang('El proceso no esta configurado completamente', true);
        $arr['error'] = true;
    }
}

if ( $cmb_prd_prioridad_id == 0 )
{
    $arr['cmb_prd_prioridad_id'] = Lang::_lang('Debe seleccionar una prioridad', true);
    $arr['error'] = true;
}


foreach ( $cmb_prd_linea_produccion_ids as $key => $cmb_prd_linea_produccion_id )
{
    if ( $cmb_prd_linea_produccion_id == '' || $cmb_prd_linea_produccion_id == 0 )
    {
        $arr['cmb_prd_linea_produccion_id_' . $key ] = Lang::_lang('Debe seleccionar una linea de produccion', true);
        $arr['error'] = true;
    }
}
//exit;

if ( ! $arr['error'] )
{
    $prd_orden_trabajo->setConfigurarOrdenTrabajo($cmb_prd_proceso_productivo_id, $cmb_prd_linea_produccion_ids, $cmb_prd_prioridad_id, $cmb_cli_cliente_id, $cmb_ope_operario_id);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
