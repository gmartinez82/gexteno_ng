<?php

include "_autoload.php";

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$pde_factura_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_id', 0);
$pde_factura = PdeFactura::getOxId($pde_factura_id);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$txt_gral_centro_costo_porcentaje_afectados = Gral::getVars(Gral::VARS_POST, "txt_gral_centro_costo_porcentaje_afectado", null);
//Gral::prr($_POST);

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;


//----------------------------------------------------
//Sumar los porcentajes
//----------------------------------------------------
$total_permitido_porcentaje_afectados = 100;
$total_porcentaje_afectados = 0;
foreach ($txt_gral_centro_costo_porcentaje_afectados as $porcentaje_afectado)
{
    $porcentaje_afectado = Gral::getImporteDesdePriceFormatToDB($porcentaje_afectado);
    $total_porcentaje_afectados += $porcentaje_afectado;
}

if ($total_porcentaje_afectados != $total_permitido_porcentaje_afectados)
{
    $arr["error_general"] .= Lang::_lang(" Los porcentajes afectados deben sumar el ".$total_permitido_porcentaje_afectados."%", true);
    $arr["error"] = true;
}

if (!$arr["error"])
{
    $pde_factura->setPorcentajeAfectadoEnCentroCosto($txt_gral_centro_costo_porcentaje_afectados);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
?>