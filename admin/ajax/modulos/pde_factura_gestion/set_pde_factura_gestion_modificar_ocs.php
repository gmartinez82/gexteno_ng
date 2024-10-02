<?php

include "_autoload.php";

$pde_factura_id = Gral::getVars(Gral::VARS_POST, "pde_factura_id", 0);

// se obtienen variables si es factura de orden-venta
$pde_oc_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_oc", null);
$pde_oc_cantidads = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_cantidad", null);
$pde_oc_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_importe_unitario", null);
$pde_oc_porcentaje_descuentos = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_porcentaje_descuento", null);
$cmb_ordenar_ocs = Gral::getVars(Gral::VARS_POST, "cmb_ordenar_oc", null);

//Gral::prr($cmb_ordenar_ocs);
//exit;


// se realizan los controles de datos
$arr["error"] = false;

if (is_null($pde_oc_ids)) {
    $arr["error_general"] = Lang::_lang("Debe seleccionar una Orden de Compra", true);
    $arr["error"] = true;
}

if (is_null($pde_oc_cantidads)) {
    $arr["error_general"] .= Lang::_lang(" La cantidad es incorrecta", true);
    $arr["error"] = true;
}

foreach ($pde_oc_cantidads as $pde_oc_cantidad) {
    if ($pde_oc_cantidad == 0) {
        $arr["error_general"] .= Lang::_lang(" La cantidad no puede ser 0", true);
        $arr["error"] = true;
    }
}


if (!$arr["error"]) {

    $pde_factura = PdeFactura::setPdeFacturaAgregarOCs($pde_oc_ids, $pde_oc_cantidads, $pde_oc_importe_unitarios, $pde_oc_porcentaje_descuentos, $cmb_ordenar_ocs, $pde_factura_id);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>