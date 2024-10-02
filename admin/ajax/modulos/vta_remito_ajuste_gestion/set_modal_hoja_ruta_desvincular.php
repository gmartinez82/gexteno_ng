<?php

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_id', 0, Gral::TIPO_INTEGER);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------

$vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;

if (!$arr["error"])
{
    $vta_remito_ajuste->setDesvincularHojaRuta();
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;