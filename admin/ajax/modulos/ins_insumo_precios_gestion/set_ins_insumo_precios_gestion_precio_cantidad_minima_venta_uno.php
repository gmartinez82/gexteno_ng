<?php
include "_autoload.php";

$ins_insumo_id = Gral::getVars(Gral::VARS_POST, 'ins_insumo_id', 0, Gral::TIPO_INTEGER);
$ins_tipo_lista_id = Gral::getVars(Gral::VARS_POST, 'ins_tipo_lista_id', 0, Gral::TIPO_INTEGER);
$txt_cantidad_minima_venta = Gral::getVars(Gral::VARS_POST, 'txt_cantidad_minima_venta', 0, Gral::TIPO_INTEGER);

$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
$ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_id);

//Gral::prr($_POST);

// ------------------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------------------
$arr["error"] = false;

if ($ins_insumo_id == 0) {
    $arr["ins_insumo_id"] = Lang::_lang("No se encontro Insumo. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    if ($ins_insumo && $ins_tipo_lista_precio) {
        $ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();
        if ($ins_insumo_costo) {
            $costo_actual = $ins_insumo_costo->getCosto();

            $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio);
            if ($ins_lista_precio) {
                
                $ins_lista_precio->setCantidadMinimaVenta($txt_cantidad_minima_venta);

                // -----------------------------------------------------------------
                // se actualiza precio de venta personalizado
                // -----------------------------------------------------------------
                $ins_lista_precio->save();                
            }
        }
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
