<?php

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_ins_insumo_id', 0, Gral::TIPO_INTEGER);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$cmb_prd_prioridad_id = Gral::getVars(Gral::VARS_POST, 'cmb_prd_prioridad_id', 0, Gral::TIPO_INTEGER);
$txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '', Gral::TIPO_STRING);

$ins_insumo_id = 0;
$cantidad = 0;
$cli_cliente_id = 0;
$prd_tipo_origen_id = 0;
$observacion = $txa_observacion;

$vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);
if ( $vta_presupuesto_ins_insumo )
{
    //$cantidad = $vta_presupuesto_ins_insumo->getCantidad();
    $cantidad = $vta_presupuesto_ins_insumo->getCantidadTotalCalculada();
    
    $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
    if ( $ins_insumo )
    {
        $ins_insumo_id = $ins_insumo->getId();
    }
    
    $vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();
    if ( $vta_presupuesto )
    {
        //$observacion = $vta_presupuesto->getNotaInterna();
        
        $cli_cliente = $vta_presupuesto->getCliCliente();
        if ( $cli_cliente )
        {
            $cli_cliente_id = $cli_cliente->getId();
        }
        
    }
}

$prd_tipo_origen = PrdTipoOrigen::getOxCodigo(PrdTipoOrigen::TIPO_ORIGEN_PRESUPUESTO);
if ( $prd_tipo_origen )
{
    $prd_tipo_origen_id = $prd_tipo_origen->getId();
}

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


if ( $cmb_prd_prioridad_id == 0 )
{
    $arr['cmb_prd_prioridad_id'] = Lang::_lang('Debe seleccionar una prioridad', true);
    $arr['error'] = true;
}


if ( ! $arr['error'] )
{
    PrdOrdenTrabajo::setInicializarOrdenTrabajo($prd_orden_trabajo_id, $ins_insumo_id, $cmb_prd_prioridad_id, $prd_tipo_origen_id, $cli_cliente_id, $cantidad, $observacion, $vta_presupuesto_ins_insumo_id, false);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
