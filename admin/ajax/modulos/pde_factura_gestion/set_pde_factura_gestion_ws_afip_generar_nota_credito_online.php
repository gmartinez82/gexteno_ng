<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$pde_factura_id = Gral::getVars(Gral::VARS_POST, "pde_factura_id", 0);

$pde_factura_pde_oc_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_factura_pde_oc", null);
$pde_factura_pde_oc_cantidads = Gral::getVars(Gral::VARS_POST, "txt_pde_factura_pde_oc_cantidad", null);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

//if (Ctrl::esVacio($txa_observacion)) {
//    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
//    $arr["error"] = true;
//}

if (is_null($pde_factura_pde_oc_ids)) {
    $arr["error_general"] = Lang::_lang("Debe seleccionar una Orden de Venta.", true);
    $arr["error"] = true;
}

if (is_null($pde_factura_pde_oc_cantidads)) {
    $arr["error_general"] .= Lang::_lang(" La cantidad es incorrecta.", true);
    $arr["error"] = true;
}

foreach ($pde_factura_pde_oc_cantidads as $pde_factura_pde_oc_cantidad) {
    if ($pde_factura_pde_oc_cantidad == 0) {
        $arr["error_general"] .= Lang::_lang(" La cantidad no puede ser 0.", true);
        $arr["error"] = true;
    }
}

if ($pde_factura_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro la Factura. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $pde_factura = PdeFactura::getOxId($pde_factura_id);
    $gral_empresa_id = $pde_factura->getGralEmpresaId();
    $pde_centro_pedido_id = $pde_factura->getPdeCentroPedidoId();
    
    $pde_nota_credito = PdeNotaCredito::setInicializarPdeNotaCreditoDesdeFactura($gral_empresa_id, $pde_centro_pedido_id, $pde_factura_pde_oc_ids, $pde_factura_pde_oc_cantidads, $observacion = '');
//    Gral::prr($pde_nota_credito);
    
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>