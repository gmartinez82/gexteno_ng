<?php

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0, Gral::TIPO_INTEGER);
$tipo_estado = Gral::getVars(Gral::VARS_GET, 'tipo_estado', '', Gral::TIPO_STRING);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '', Gral::TIPO_STRING);

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);


// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;

if(Ctrl::esVacio($txa_observacion)){
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar comentarios", true);
    $arr["error"] = true;    
}

if (!$arr["error"])
{
    
    $vta_presupuesto->setVtaPresupuestoEstadoCustom($tipo_estado, $txa_observacion);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
