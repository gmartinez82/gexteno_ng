<?php

include "_autoload.php";

$ins_insumo_id = Gral::getVars(1, 'ins_insumo_id', 0, Gral::TIPO_INTEGER);
$txt_costo = Gral::getVars(1, 'txt_costo', 0, Gral::TIPO_STRING);

$txt_costo = str_replace('.', '', $txt_costo);
$txt_costo = str_replace(',', '.', $txt_costo);

$cmb_filtro_iva_incluido = Gral::getSes(DbConfig::CONFIG_SISTEMA_CODIGO.DbConfig::CONFIG_CONF_PROYECTO_MIN.'INS_INSUMO_PRECIOS_GESTION_FILTRO_IVA_INCLUIDO');

$ins_insumo = InsInsumo::getOxId($ins_insumo_id);

// se realizan los controles de datos
$arr["error"] = false;

if ($ins_insumo_id == 0) {
    $arr["ins_insumo_id"] = Lang::_lang("No se encontro Insumo. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $prefijo = 'INDIVIDUAL - ';


    if ($ins_insumo) {
        $gral_tipo_iva = $ins_insumo->getGralTipoIvaVentaObj();
        $ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();
        if ($ins_insumo_costo) {
            $costo_actual = $ins_insumo_costo->getCosto();
            
            // se verifica si se esta operando con iva incluido
            if($cmb_filtro_iva_incluido){
                $txt_costo = $txt_costo / $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
            }

            if($txt_costo != $costo_actual){
                // -----------------------------------------------------------------
                // se actualiza costo de insumo
                // -----------------------------------------------------------------
                $ins_insumo->setInsInsumoCostoActual(
                        $prv_importacion = false, $txt_costo, $observacion = '-', $prefijo . $descripcion = 'Actualizacion manual'
                );
            }
        } else {
            // -----------------------------------------------------------------
            // se actualiza costo de insumo
            // -----------------------------------------------------------------
            $ins_insumo->setInsInsumoCostoActual(
                    $prv_importacion = false, $txt_costo, $observacion = '-', $prefijo . $descripcion = 'Inicializacion manual'
            );
        }
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
