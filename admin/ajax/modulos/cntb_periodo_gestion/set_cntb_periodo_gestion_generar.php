<?php
set_time_limit(0);
ini_set('memory_limit', '-1');

include "_autoload.php";

$cmb_gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$cmb_cntb_ejercicio_id = Gral::getVars(Gral::VARS_POST, "cmb_cntb_ejercicio_id", 0);
$cmb_gral_mes_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_mes_id", 0);
$cmb_anio = Gral::getVars(Gral::VARS_POST, "cmb_anio", 0);
$txa_observacion  = Gral::getVars(Gral::VARS_POST, "txa_observacion", "");

// -----------------------------------------------------------------------------
// se realizan los controles de datos
// -----------------------------------------------------------------------------
$arr["error"] = false;

if ($cmb_gral_empresa_id == 0) {
    $arr["cmb_gral_empresa_id"] = Lang::_lang("Debe indicar una empresa", true);
    $arr["error"] = true;
}

if ($cmb_cntb_ejercicio_id == 0) {
    $arr["cmb_cntb_ejercicio_id"] = Lang::_lang("Debe indicar un ejercicio", true);
    $arr["error"] = true;
}

if ($cmb_gral_mes_id == 0) {
    $arr["cmb_gral_mes_id"] = Lang::_lang("Debe indicar un mes", true);
    $arr["error"] = true;
}

if ($cmb_anio == 0) {
    $arr["cmb_anio"] = Lang::_lang("Debe indicar un anio", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txa_observacion)){
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}


$cntb_periodo = CntbPeriodo::getCntbPeriodoInicializado($cmb_gral_empresa_id, $cmb_cntb_ejercicio_id, $cmb_gral_mes_id, $cmb_anio, $txa_observacion);
if ($cntb_periodo) {
    $arr["cntb_periodo_gestion_generar"] = Lang::_lang("El periodo seleccionado ya fue generado", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_comprobantes_no_contabilizados = VtaComprobante::getVtaComprobantesNoContabilizados($cmb_gral_empresa_id, $fecha_desde = false, $fecha_hasta = false, $cmb_gral_mes_id, $cmb_anio);
    $pde_comprobantes_no_contabilizados = PdeComprobante::getPdeComprobantesNoContabilizados($cmb_gral_empresa_id, $fecha_desde = false, $fecha_hasta = false, $cmb_gral_mes_id, $cmb_anio);

    /*
    if (count($vta_comprobantes_no_contabilizados['VtaComprobantes']) > 0 || count($pde_comprobantes_no_contabilizados['PdeComprobantes']) > 0) {
        $arr["error"] = true;

        foreach ($vta_comprobantes_no_contabilizados['VtaComprobantes'] as $arr_vta_comprobantes) {
            foreach ($arr_vta_comprobantes as $vta_tipo_comprobante => $vta_comprobante) {
                $arr["arr_comprobantes"]['vta_comprobantes'][$vta_tipo_comprobante]['id'] = $vta_comprobante->getId();
                $arr["arr_comprobantes"]['vta_comprobantes'][$vta_tipo_comprobante]['numero_comprobante_completo_full'] = $vta_comprobante->getNumeroComprobanteCompletoFull();
                $arr["arr_comprobantes"]['vta_comprobantes'][$vta_tipo_comprobante]['persona'] = substr($vta_comprobante->getPersonaDescripcion(), 0, 20);
                $arr["arr_comprobantes"]['vta_comprobantes'][$vta_tipo_comprobante]['fecha'] = Gral::getFechaToWeb($vta_comprobante->getFechaEmision());
            }
        }

        foreach ($pde_comprobantes_no_contabilizados['PdeComprobantes'] as $arr_pde_comprobantes) {
            foreach ($arr_pde_comprobantes as $pde_tipo_comprobante => $pde_comprobante) {
                $arr["arr_comprobantes"]['pde_comprobantes'][$pde_tipo_comprobante]['id'] = $pde_comprobante->getId();
                $arr["arr_comprobantes"]['pde_comprobantes'][$pde_tipo_comprobante]['numero_comprobante_completo_full'] = $pde_comprobante->getNumeroComprobanteCompletoFull();
                $arr["arr_comprobantes"]['pde_comprobantes'][$pde_tipo_comprobante]['persona'] = substr($pde_comprobante->getPersonaDescripcion(), 0, 20);;
                $arr["arr_comprobantes"]['pde_comprobantes'][$pde_tipo_comprobante]['fecha'] = Gral::getFechaToWeb($pde_comprobante->getFechaEmision());
            }
        }
    }
    */
    if (!$arr["error"]) {
        CntbPeriodo::setInicializarCntbPeriodo($cmb_gral_empresa_id, $cmb_cntb_ejercicio_id, $cmb_gral_mes_id, $cmb_anio);
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>