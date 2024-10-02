<?php
include "_autoload.php";

$ins_insumo_id = Gral::getVars(1, 'ins_insumo_id', 0, Gral::TIPO_INTEGER);
$ins_tipo_lista_id = Gral::getVars(1, 'ins_tipo_lista_id', 0, Gral::TIPO_INTEGER);
$txt_precio_porcentaje = Gral::getVars(1, 'txt_precio_porcentaje', 0, Gral::TIPO_STRING);

$txt_precio_porcentaje = str_replace('.', '', $txt_precio_porcentaje);
$txt_precio_porcentaje = str_replace(',', '.', $txt_precio_porcentaje);

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
                
                if($ins_tipo_lista_precio->getPorcentajeIncremento() == $txt_precio_porcentaje){
                    // ---------------------------------------------------------
                    // si se respeta el porecentaje de lista de precio
                    // ---------------------------------------------------------
                    $ins_lista_precio->setPorcentajeIncremento(0);
                }else{
                    // ---------------------------------------------------------
                    // si se personaliza el porcentaje de incremento de venta
                    // ---------------------------------------------------------
                    $ins_lista_precio->setPorcentajeIncremento($txt_precio_porcentaje);
                }

                // -----------------------------------------------------------------
                // se actualiza precio de venta personalizado
                // -----------------------------------------------------------------
                $ins_lista_precio->setCalcularImporte($save = true);
                
            }
        }
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
