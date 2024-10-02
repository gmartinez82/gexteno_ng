<?php

include "_autoload.php";

$pdi_pedido_agrupacion_id = Gral::getVars(Gral::VARS_POST, 'pdi_pedido_agrupacion_id', 0, Gral::TIPO_INTEGER);
$chk_aceptars             = Gral::getVars(Gral::VARS_POST, 'chk_aceptar', null);
$txt_cantidad_solicitados = Gral::getVars(Gral::VARS_POST, 'txt_cantidad_solicitado', 0, Gral::TIPO_INTEGER);
$txa_observacion          = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '', Gral::TIPO_STRING);
$arr_items = array();

$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe agregar una observacion", true);
    $arr["error"] = true;
}

if (count($chk_aceptars) == 0)
{
    $arr["lbl_general"] = Lang::_lang("Debe agregar como minimo 1 item", true);
    $arr["error"] = true;
}

if (!$arr["error"])
{
    $pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);

    foreach ($chk_aceptars as $key => $pdi_pedido_id)
    {
        $txt_cantidad_solicitada = $txt_cantidad_solicitados[$key];
                
        $arr_items[] = array(
            'pdi_pedido_id'     => $pdi_pedido_id,
            'cantidad_aceptada' => $txt_cantidad_solicitada,
        );
    }
        
    $pdi_pedido_agrupacion->addPdiPedidoAceptacionAgrupacion($arr_items, $txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>