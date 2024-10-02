<?php

include "_autoload.php";

$ins_etiqueta_id = Gral::getVars(Gral::VARS_POST, "ins_etiqueta_id", 0);
$vta_vendedor_id = Gral::getVars(Gral::VARS_POST, "vta_vendedor_id", 0);
$descuento_maximo = Gral::getVars(Gral::VARS_POST, "descuento_maximo", '');

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($descuento_maximo)) {
    $arr["descuento_maximo"] = Lang::_lang("No se encontro descuento maximo.", true);
    $arr["error"] = true;
}
if ($ins_etiqueta_id == 0) {
    $arr["ins_etiqueta_id"] = Lang::_lang("No se encontro InsEtiquetaId. ", true);
    $arr["error"] = true;
}
if ($vta_vendedor_id == 0) {
    $arr["vta_vendedor_id"] = Lang::_lang("No se encontro VtaVendedorId. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_vendedor_descuento = VtaVendedorDescuento::getVtaVendedorDescuentoXInsEtiquetaIdYVtaVendedorId($ins_etiqueta_id, $vta_vendedor_id);

    if ($vta_vendedor_descuento) {
        $vta_vendedor_descuento->setDescuentoMaximo($descuento_maximo);
        $vta_vendedor_descuento->save();
        
    } else {
        $vta_vendedor_descuento = VtaVendedorDescuento::setVtaVendedorDescuentoXInsEtiquetaIdYVtaVendedorId($ins_etiqueta_id, $vta_vendedor_id, $descuento_maximo);
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>