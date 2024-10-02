<?php

include "_autoload.php";

$asiento_id = Gral::getVars(Gral::VARS_POST, 'asiento_id', 0);
$txt_fecha = Gral::getVars(Gral::VARS_POST, "txt_fecha", '');
$cmb_cntb_ejercicio_id = Gral::getVars(Gral::VARS_POST, "cmb_cntb_ejercicio_id", 0);
$cmb_cntb_tipo_asiento_id = Gral::getVars(Gral::VARS_POST, "cmb_cntb_tipo_asiento_id", 0);
$cmb_gral_actividad_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_actividad_id", 0);
$cmb_cntb_tipo_movimiento_id = Gral::getVars(Gral::VARS_POST, "cmb_cntb_tipo_movimiento_id", 0);
$txt_descripcion = Gral::getVars(Gral::VARS_POST, "txt_descripcion", '');
$txt_observacion = Gral::getVars(Gral::VARS_POST, "txt_observacion", '');

$arr_txt_importe_debe = Gral::getVars(Gral::VARS_POST, 'txt_importe_debe', 0);
$arr_txt_importe_haber = Gral::getVars(Gral::VARS_POST, 'txt_importe_haber', 0);

foreach ($arr_txt_importe_debe as $i => $txt_importe_debe) {
    $dbsug_cntb_cuenta_id = Gral::getVars(Gral::VARS_POST, 'dbsug_cntb_cuenta_' . $i . '_id', 0);
    $arr_dbsug_cntb_cuenta_id[$i] = $dbsug_cntb_cuenta_id;
}

$txt_fecha = Gral::getFechaToDB($txt_fecha);

$cntb_diario_asiento = CntbDiarioAsiento::getOxId($asiento_id);


// -------------------------------------------------------------------------
// se realizan los controles de datos
// -------------------------------------------------------------------------
$arr["error"] = false;

if ($cmb_cntb_ejercicio_id == 0) {
    $arr["cmb_cntb_ejercicio_id"] = Lang::_lang("Debe indicar un ejercicio", true);
    $arr["error"] = true;
}
if ($cmb_cntb_tipo_asiento_id == 0) {
    $arr["cmb_cntb_tipo_asiento_id"] = Lang::_lang("Debe indicar un tipo de asiento", true);
    $arr["error"] = true;
}
if ($cmb_gral_actividad_id == 0) {
    $arr["cmb_gral_actividad_id"] = Lang::_lang("Debe indicar una actividad", true);
    $arr["error"] = true;
}
if ($cmb_cntb_tipo_movimiento_id == 0) {
    $arr["cmb_cntb_tipo_movimiento_id"] = Lang::_lang("Debe indicar un tipo de movimiento", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_descripcion)) {
    $arr["txt_descripcion"] = Lang::_lang("Debe indicar una descripcion", true);
    $arr["error"] = true;
}
if (!Ctrl::esFechaValida($txt_fecha)) {
    $arr["txt_fecha"] = Lang::_lang("Debe indicar una fecha valida", true);
    $arr["error"] = true;
}

if (is_array($arr_dbsug_cntb_cuenta_id)) {
    // -------------------------------------------------------------------------
    // se controlan cuentas agregadas
    // -------------------------------------------------------------------------
    foreach ($arr_dbsug_cntb_cuenta_id as $i => $dbsug_cntb_cuenta_id) {
        $cntb_cuenta = CntbCuenta::getOxId($dbsug_cntb_cuenta_id);
        if (!$cntb_cuenta) {
            $arr["dbsug_cntb_cuenta_" . $i] = Lang::_lang("Debe seleccionar una cuenta contable", true);
            $arr["error"] = true;
        }
        $txt_comprobante = $arr_txt_comprobante[$i];
        $txt_importe_debe = Gral::getImporteDesdePriceFormatToDB($arr_txt_importe_debe[$i]);
        $txt_importe_haber = Gral::getImporteDesdePriceFormatToDB($arr_txt_importe_haber[$i]);

        if ($txt_importe_debe == 0 && $txt_importe_haber == 0) {
            $arr["txt_importe_debe_" . $i] = Lang::_lang("Ingresar en DEBE o HABER", true);
            $arr["txt_importe_haber_" . $i] = Lang::_lang("Ingresar en DEBE o HABER", true);
            $arr["error"] = true;
        } elseif ($txt_importe_debe != 0 && $txt_importe_haber != 0) {
            $arr["txt_importe_debe_" . $i] = Lang::_lang("No puede en DEBE y HABER", true);
            $arr["txt_importe_haber_" . $i] = Lang::_lang("No puede en DEBE y HABER", true);
            $arr["error"] = true;
        }
    }
} else {
    $arr["botonera"] = Lang::_lang("Debe agregar cuentas contables", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    // se inicializa el ejercicio
    $cntb_ejercicio = CntbEjercicio::getOxId($cmb_cntb_ejercicio_id);
    $cntb_tipo_asiento = CntbTipoAsiento::getOxId($cmb_cntb_tipo_asiento_id);
    $gral_actividad = GralActividad::getOxId($cmb_gral_actividad_id);
    $cntb_tipo_origen = CntbTipoOrigen::getOxCodigo(CntbTipoOrigen::TIPO_MANUAL);
    $cntb_tipo_movimiento = CntbTipoMovimiento::getOxId($cmb_cntb_tipo_movimiento_id);
    $fecha = $txt_fecha;
    $descripcion = $txt_descripcion;
    $observacion = $txt_observacion;

    foreach ($arr_dbsug_cntb_cuenta_id as $i => $dbsug_cntb_cuenta_id) {
        $cntb_cuenta = CntbCuenta::getOxId($dbsug_cntb_cuenta_id);
        $txt_comprobante = $arr_txt_comprobante[$i];
        $txt_importe_debe = Gral::getImporteDesdePriceFormatToDB($arr_txt_importe_debe[$i]);
        $txt_importe_haber = Gral::getImporteDesdePriceFormatToDB($arr_txt_importe_haber[$i]);

        //----------------------------------------------------------------------
        // se determina si es DEBE
        //----------------------------------------------------------------------
        if ((float) $txt_importe_debe > 0) {
            $array_cuentas_debe[] = array(
                'cntb_cuenta' => $cntb_cuenta,
                'codigo_comprobante' => $txt_comprobante,
                'importe' => $txt_importe_debe,
            );
        }

        //----------------------------------------------------------------------
        // se determina si es HABER
        //----------------------------------------------------------------------
        if ((float) $txt_importe_haber > 0) {
            $array_cuentas_haber[] = array(
                'cntb_cuenta' => $cntb_cuenta,
                'codigo_comprobante' => $txt_comprobante,
                'importe' => $txt_importe_haber,
            );
        }
    }

    //Gral::prr($array_cuentas_debe);
    //Gral::prr($array_cuentas_haber);
    //----------------------------------------------------------------------
    // se agrega el asiento
    //----------------------------------------------------------------------
    $arr_estado_control = $cntb_ejercicio->setRegistrarAsiento($cntb_diario_asiento, $fecha, $cntb_tipo_asiento, $gral_actividad, $cntb_tipo_origen, $cntb_tipo_movimiento, $descripcion, $array_cuentas_debe, $array_cuentas_haber, false, $observacion);
    //Gral::prr($arr_estado_control);
    if ($arr_estado_control['error']) {
        foreach ($arr_estado_control['errores'] as $arr_error) {
            $arr["botonera"] = 'Error ' . $arr_error['codigo'] . ' - ' . $arr_error['descripcion'];
            $arr["error"] = true;
        }
    } else {
        $cntb_diario_asiento = $arr_estado_control['cntb_diario_asiento'];
        $arr["cntb_diario_asiento_id"] = $cntb_diario_asiento->getId();
        $arr["cntb_diario_asiento_numero"] = $cntb_diario_asiento->getNumero();
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>