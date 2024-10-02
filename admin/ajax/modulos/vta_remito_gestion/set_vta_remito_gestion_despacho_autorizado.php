<?php

include "_autoload.php";

$txa_nota_interna = Gral::getVars(Gral::VARS_POST, "txa_nota_interna", '');

$txt_cantidad_bultos = Gral::getVars(Gral::VARS_POST, "txt_cantidad_bultos", '');
$txt_peso = Gral::getVars(Gral::VARS_POST, "txt_peso", '');
$vta_remito_id = Gral::getVars(Gral::VARS_POST, "vta_remito_id", 0);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_nota_interna)) {
    $arr["txa_nota_interna"] = Lang::_lang("Debe indicar una nota interna.", true);
    $arr["error"] = true;
}
if (!Ctrl::esNumero($txt_cantidad_bultos)) {
    $arr["txt_cantidad_bultos"] = Lang::_lang("Debe indicar la cantidad de bultos en numero.", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_cantidad_bultos)) {
    $arr["txt_cantidad_bultos"] = Lang::_lang("Debe indicar la cantidad de bultos.", true);
    $arr["error"] = true;
}
if (!Ctrl::esNumero($txt_peso)) {
    $arr["txt_peso"] = Lang::_lang("Debe indicar el peso en numeros.", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_peso)) {
    $arr["txt_peso"] = Lang::_lang("Debe indicar el peso.", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_remito = VtaRemito::getOxId($vta_remito_id);

    if ($vta_remito) {
        $vta_remito_estado = $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_AUTORIZADO_DESPACHO);
        $vta_remito_estado->setCantidadBultos($txt_cantidad_bultos);
        $vta_remito_estado->setPeso($txt_peso);
        $vta_remito_estado->setNotaInterna($txa_nota_interna);
        
        $vta_remito_estado->save();
        $vta_remito->save();
        
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>