<?php

include "_autoload.php";

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$cli_cliente_tienda_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_tienda_id', 0, Gral::TIPO_INTEGER);
$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0, Gral::TIPO_INTEGER);
$copiar_destino = Gral::getVars(Gral::VARS_GET, 'copiar_destino', 0, Gral::TIPO_STRING);

$cli_cliente_tienda = CliClienteTienda::getOxId($cli_cliente_tienda_id);
if($cli_cliente_tienda){
    $cli_cliente = CliCliente::getOxId($cli_cliente_tienda->getCliClienteId());
}

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$chk_fila = Gral::getVars(Gral::VARS_POST, 'chk_fila', 0, Gral::TIPO_INTEGER);

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;

if(!$chk_fila)
{
    $arr['error_general'].= Lang::_lang('Debe seleccionar campo para verificar', true);
    $arr['error'] = true;
}

if (!$arr["error"])
{
    $cli_cliente_tienda->setVerificarCliClienteTienda($chk_fila, strtolower($copiar_destino));
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;