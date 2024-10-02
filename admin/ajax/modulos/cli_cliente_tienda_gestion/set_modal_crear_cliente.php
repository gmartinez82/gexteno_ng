<?php

include "_autoload.php";

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$cli_cliente_tienda_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_tienda_id', 0, Gral::TIPO_INTEGER);


// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$cmb_cli_categoria_id = Gral::getVars(Gral::VARS_POST, 'cmb_cli_categoria_id', 0, Gral::TIPO_INTEGER);




// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;
$cli_cliente_tienda = CliClienteTienda::getOxId($cli_cliente_tienda_id);

if ($cmb_cli_categoria_id == 0)
{
    $arr['cmb_cli_categoria_id'] = Lang::_lang('Debe seleccionar una categoria', true);
    $arr['error'] = true;
}



$cli_cliente = CliCliente::getOxCuit($cli_cliente_tienda->getCuit());
if($cli_cliente)
{
    $arr['error_general'] = Lang::_lang('Ya existe un cliente con el mismo CUIT', true).' - '.$cli_cliente->getDescripcion().' '.$cli_cliente->getCuit();
    $arr['error'] = true;
}

if (!$arr["error"])
{
    $cli_cliente_tienda = CliClienteTienda::getOxId($cli_cliente_tienda_id);
    $cli_cliente = $cli_cliente_tienda->setCliClienteDesdeCliClienteTienda($cmb_cli_categoria_id);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
?>