<?php

$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_id", null);
$chk_vta_presupuesto_ins_insumo = Gral::getVars(Gral::VARS_POST, 'chk_vta_presupuesto_ins_insumo');

$dbsug_cli_cliente_id = Gral::getVars(Gral::VARS_POST, "dbsug_cli_cliente_id", null);
$cmb_gral_tipo_documento_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_documento_id", null);
$txt_persona_descripcion = Gral::getVars(Gral::VARS_POST, "txt_persona_descripcion", '');
$txt_persona_documento = Gral::getVars(Gral::VARS_POST, "txt_persona_documento", '');
$txt_persona_email = Gral::getVars(Gral::VARS_POST, "txt_persona_email", '');
//$cmb_cli_centro_recepcion_id = Gral::getVars(Gral::VARS_POST, "cmb_cli_centro_recepcion_id", 0);

$cmb_vta_preventista_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_preventista_id", null);
$txt_fecha_presupuesto = Gral::getVars(Gral::VARS_POST, "txt_fecha_presupuesto", '');
$txt_fecha_vencimiento = Gral::getVars(Gral::VARS_POST, "txt_fecha_vencimiento", '');
$txt_fecha_entrega = Gral::getVars(Gral::VARS_POST, "txt_fecha_entrega", '');
$txt_fecha_recordatorio = Gral::getVars(Gral::VARS_POST, "txt_fecha_recordatorio", '');
$cmb_gral_fp_forma_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", null);
$cmb_gral_fp_medio_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_medio_pago_id", null);
$cmb_gral_fp_cuota_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_cuota_id", null);
$cmb_vta_comprador_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_comprador_id", null);
$cmb_ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_POST, "cmb_ins_tipo_lista_precio_id", null);
$txa_nota_interna = Gral::getVars(Gral::VARS_POST, "txa_nota_interna", '');
$txa_nota_recordatorio = Gral::getVars(Gral::VARS_POST, "txa_nota_recordatorio", '');
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

$cmb_gral_actividad_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_actividad_id", null);
$cmb_gral_escenario_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_escenario_id", null);

//$cmb_gral_sucursal_retiro = Gral::getVars(Gral::VARS_POST, "cmb_gral_sucursal_retiro", 0);

$txt_fecha_presupuesto_to_db = Gral::getFechaToDB($txt_fecha_presupuesto);
$txt_fecha_vencimiento_to_db = Gral::getFechaToDB($txt_fecha_vencimiento);
$txt_fecha_entrega_to_db = Gral::getFechaToDB($txt_fecha_entrega);
$txt_fecha_recordatorio_to_db = Gral::getFechaToDB($txt_fecha_recordatorio);


$cmb_confirmacion_vta_preventista_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_vta_preventista_id", null);
$cmb_confirmacion_gral_fp_forma_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_gral_fp_forma_pago_id", 0);
$cmb_confirmacion_gral_fp_medio_pago_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_gral_fp_medio_pago_id", 0);
$cmb_confirmacion_gral_fp_cuota_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_gral_fp_cuota_id", 0);

$cmb_confirmacion_cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_cli_cliente_id", null);

$cmb_confirmacion_gral_actividad_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_gral_actividad_id", 0);
$cmb_confirmacion_gral_escenario_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_gral_escenario_id", 0);
$cmb_confirmacion_gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_gral_empresa_id", 0);
$cmb_confirmacion_vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_vta_punto_venta_id", 0);
$txa_confirmacion_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_confirmacion_nota_publica", '');
$cmb_confirmacion_pan_panol_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_pan_panol_id", 0);
$cmb_confirmacion_vta_tipo_remito_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_vta_tipo_remito_id", 0);

$cmb_porcentaje_iva = Gral::getVars(Gral::VARS_POST, "cmb_porcentaje_iva", -1);

$txt_confirmacion_persona_descripcion = Gral::getVars(Gral::VARS_POST, "txt_confirmacion_persona_descripcion", '');
$cmb_confirmacion_gral_tipo_documento_id = Gral::getVars(Gral::VARS_POST, "cmb_confirmacion_gral_tipo_documento_id", null);
$txt_confirmacion_persona_documento = Gral::getVars(Gral::VARS_POST, "txt_confirmacion_persona_documento", '');
$txt_confirmacion_persona_email = Gral::getVars(Gral::VARS_POST, "txt_confirmacion_persona_email", '');

$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);


$cmb_vta_recibo_item_generico_vta_recibo_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_recibo_item_generico_vta_recibo_concepto_id", null);
$txt_vta_recibo_item_generico_descripcions            = Gral::getVars(Gral::VARS_POST, "txt_vta_recibo_item_generico_descripcion", null);
$txt_vta_recibo_item_generico_referencias             = Gral::getVars(Gral::VARS_POST, "txt_vta_recibo_item_generico_referencia", null);
$cmb_vta_recibo_item_generico_gral_moneda_ids         = Gral::getVars(Gral::VARS_POST, "cmb_vta_recibo_item_generico_gral_moneda_id", null);
$txt_vta_recibo_item_generico_importe_unitario_reals  = Gral::getVars(Gral::VARS_POST, "txt_vta_recibo_item_generico_importe_unitario_real", null);
$txt_vta_recibo_item_generico_importe_unitarios       = Gral::getVars(Gral::VARS_POST, "txt_vta_recibo_item_generico_importe_unitario", null);
$cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids  = Gral::getVars(Gral::VARS_POST, "cmb_vta_recibo_item_generico_gral_fp_forma_pago_id", null);

$modulo                      = Gral::getVars(Gral::VARS_POST, 'modulo', 0);
$var_sesion_random           = Gral::getVars(Gral::VARS_POST, 'var_sesion_random', '');

$var_sesion_modulo_cheque    = $modulo.'_cheque_info'.$var_sesion_random;
$var_sesion_modulo_retencion = $modulo.'_retencion_info'.$var_sesion_random;

$arr_vta_recibo_cheque_infos    = Gral::getSes($var_sesion_modulo_cheque);
$arr_vta_recibo_retencion_infos = Gral::getSes($var_sesion_modulo_retencion);



$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);

$vta_presupuesto_importe_total_con_iva = $vta_presupuesto->getImporteTotalPresupuestoConIva();

// --------------------------------------------------------
// se deducen los tributos a aplicar
// --------------------------------------------------------
$importe_tributo_total = 0;
$arr_vta_tributos_aplicados = VtaFactura::getTributosAAplicarDeduccion($cmb_confirmacion_cli_cliente_id, $cmb_confirmacion_vta_punto_venta_id, $vta_presupuesto->getImporteTotalPresupuestoConDescuentoSinIva());
//Gral::prr($arr_vta_tributos_aplicados);
if($arr_vta_tributos_aplicados && is_array($arr_vta_tributos_aplicados)){
    foreach($arr_vta_tributos_aplicados as $arr_vta_tributo_aplicado){
        $importe_tributo = number_format($arr_vta_tributo_aplicado['txt_vta_recibo_item_generico_importe_unitario'], 2, ".", "");
        $importe_tributo_total+= $importe_tributo;
    }
}

//-----------------------------------------------------------------------
// Caja
//-----------------------------------------------------------------------
$us_usuario = UsUsuario::autenticado();
$fnd_cajero = $us_usuario->getFndCajeroXFndCajeroUsUsuario();

if($fnd_cajero)
{
    $cmb_fnd_caja_id = Gral::getVars(Gral::VARS_POST, "cmb_fnd_caja_id", 0); // el usuario es cajero
}
else
{
    $cmb_fnd_caja_id = Gral::getVars(Gral::VARS_POST, "cmb_fnd_caja_id", null); // el usuario no es cajero
}





// se inicializa variable de configuracion
$cv_importe_minimo_exigencia_info_comprador_consumidor_final = ConfVariable::getVtaComprobanteMinimoExigenciaInfoCompradorConsumidorFinal();

// se realizan los controles de datos
$arr["error"] = false;

if($vta_presupuesto->getVtaPresupuestoTipoEstado()->getActivo() == 0){
    $arr["error_general_modal"] = Lang::_lang("El presupuesto ya ha sido aprobado APROBADO, presione F5 para continuar", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($vta_presupuesto_id)) {
    $arr["vta_presupuesto_id"] = Lang::_lang("No se encuentra el presupuesto", true);
    $arr["error"] = true;
}

//if ($cmb_cli_cliente_id <= 0) {
//    $arr["dbsug_cli_cliente_id"] = Lang::_lang("Debe indicar un cliente", true);
//    $arr["error"] = true;
//}

if ($dbsug_cli_cliente_id == 'null') {

    if (Ctrl::esVacio($txt_persona_descripcion)) {
        $arr["txt_persona_descripcion"] = Lang::_lang("Debe indicar una persona descripcion", true);
        $arr["error"] = true;
    }
    /*
      if (Ctrl::esVacio($cmb_gral_tipo_documento_id)) {
      $arr["cmb_gral_tipo_documento_id"] = Lang::_lang("Debe indicar un tipo de documento", true);
      $arr["error"] = true;
      }
      if (Ctrl::esVacio($txt_persona_documento)) {
      $arr["txt_persona_documento"] = Lang::_lang("Debe indicar un documento de la persona", true);
      $arr["error"] = true;
      }
     */
    if (!Ctrl::esVacio($txt_persona_email)) {
        if (!Ctrl::esEmail($txt_persona_email)) {
            $arr["txt_persona_email"] = Lang::_lang("Debe indicar un email valido", true);
            $arr["error"] = true;
        }
    }

    if ($vta_presupuesto_importe_total_con_iva >= $cv_importe_minimo_exigencia_info_comprador_consumidor_final) {
        if (Ctrl::esVacio($txt_confirmacion_persona_descripcion)) {
            $arr["txt_confirmacion_persona_descripcion"] = Lang::_lang("Debe indicar una persona descripcion", true);
            $arr["error"] = true;
        }
        if (Ctrl::esVacio($cmb_confirmacion_gral_tipo_documento_id)) {
            $arr["cmb_confirmacion_gral_tipo_documento_id"] = Lang::_lang("Debe indicar un tipo de documento", true);
            $arr["error"] = true;
        }
        if (Ctrl::esVacio($txt_confirmacion_persona_documento)) {
            $arr["txt_confirmacion_persona_documento"] = Lang::_lang("Debe indicar un documento de la persona", true);
            $arr["error"] = true;
        }
    }

    // se verifico que tenga un nro de documento ingresado si se selecciono un ripo de documento
    if ($cmb_confirmacion_gral_tipo_documento_id != null) {
        if (Ctrl::esVacio($txt_confirmacion_persona_documento)) {
            $arr["txt_confirmacion_persona_documento"] = Lang::_lang("Debe indicar un documento de la persona", true);
            $arr["error"] = true;
        }
    }

    // se verifica que tenga un tipo de documento seleccionado si se ingreso un nro de documento
    if (!Ctrl::esVacio($txt_confirmacion_persona_documento)) {
        if ($cmb_confirmacion_gral_tipo_documento_id == null) {
            $arr["cmb_confirmacion_gral_tipo_documento_id"] = Lang::_lang("Debe indicar un tipo de documento", true);
            $arr["error"] = true;
        }
    }
    
    if (!Ctrl::esVacio($txt_confirmacion_persona_email)) {
        if (!Ctrl::esEmail($txt_confirmacion_persona_email)) {
            $arr["txt_confirmacion_persona_email"] = Lang::_lang("Debe indicar un email valido", true);
            $arr["error"] = true;
        }
    }
}

//if (Ctrl::esVacio($cmb_vta_vendedor_id)) {
//    $arr["cmb_vta_vendedor_id"] = Lang::_lang("Debe indicar un vendedor", true);
//    $arr["error"] = true;
//}

if (!Ctrl::esFechaValida($txt_fecha_presupuesto_to_db)) {
    $arr["txt_fecha_presupuesto"] = Lang::_lang("Debe indicar una fecha valida", true);
    $arr["error"] = true;
}

if (!Ctrl::esFechaValida($txt_fecha_vencimiento_to_db)) {
    $arr["txt_fecha_vencimiento"] = Lang::_lang("Debe indicar una fecha valida", true);
    $arr["error"] = true;
}

if (!Ctrl::esFechaValida($txt_fecha_entrega_to_db)) {
    $arr["txt_fecha_entrega"] = Lang::_lang("Debe indicar una fecha valida", true);
    $arr["error"] = true;
}

if (!Ctrl::esFechaValida($txt_fecha_recordatorio_to_db)) {
    $arr["txt_fecha_recordatorio"] = Lang::_lang("Debe indicar una fecha valida", true);
    $arr["error"] = true;
}


//if ($cmb_vta_comprador_id <= 0) {
//    $arr["cmb_vta_comprador_id"] = Lang::_lang("Debe indicar un comprador/mecanico", true);
//    $arr["error"] = true;
//}

//if (Ctrl::esVacio($cmb_ins_tipo_lista_precio_id)) {
//    $arr["cmb_ins_tipo_lista_precio_id"] = Lang::_lang("Debe indicar una lista de precio", true);
//    $arr["error"] = true;
//}

//if (Ctrl::esVacio($txa_nota_interna)) {
//    $arr["txa_nota_interna"] = Lang::_lang("Debe indicar una nota interna", true);
//    $arr["error"] = true;
//}
//if (Ctrl::esVacio($txa_nota_recordatorio)) {
//    $arr["txa_nota_recordatorio"] = Lang::_lang("Debe indicar una nota recordatorio", true);
//    $arr["error"] = true;
//}
//if (Ctrl::esVacio($txa_observacion)) {
//    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
//    $arr["error"] = true;
//}
// -----------------------------------------------------------------------------
// se realizan los controles de la pantalla de confirmacion
// -----------------------------------------------------------------------------
if ($cmb_confirmacion_gral_fp_forma_pago_id == 0) {
    $arr["cmb_confirmacion_gral_fp_forma_pago_id"] = Lang::_lang("Debe indicar una forma de pago", true);
    $arr["error"] = true;
}
if ($cmb_confirmacion_gral_fp_medio_pago_id == 0) {
    $arr["cmb_confirmacion_gral_fp_medio_pago_id"] = Lang::_lang("Debe indicar un medio de pago", true);
    $arr["error"] = true;
}
if ($cmb_confirmacion_gral_fp_cuota_id == 0) {
    $arr["cmb_confirmacion_gral_fp_cuota_id"] = Lang::_lang("Debe indicar la cant de cuotas", true);
    $arr["error"] = true;
}
if ($cmb_confirmacion_gral_actividad_id == 0) {
    $arr["cmb_confirmacion_gral_actividad_id"] = Lang::_lang("Debe indicar la actividad", true);
    $arr["error"] = true;
}
if ($cmb_confirmacion_gral_escenario_id == 0) {
    $arr["cmb_confirmacion_gral_escenario_id"] = Lang::_lang("Debe indicar el escenario", true);
    $arr["error"] = true;
}
if ($cmb_confirmacion_gral_empresa_id == 0) {
    $arr["cmb_confirmacion_gral_empresa_id"] = Lang::_lang("Debe indicar la empresa facturadora", true);
    $arr["error"] = true;
}
if ($cmb_confirmacion_vta_punto_venta_id == 0) {
    $arr["cmb_confirmacion_vta_punto_venta_id"] = Lang::_lang("Debe indicar el punto de venta", true);
    $arr["error"] = true;
}
if ($cmb_confirmacion_pan_panol_id == 0) {
    $arr["cmb_confirmacion_pan_panol_id"] = Lang::_lang("Debe indicar el Deposito", true);
    $arr["error"] = true;
}
if ($cmb_porcentaje_iva == -1) {
    //$arr["cmb_porcentaje_iva"] = Lang::_lang("Debe indicar un porcentaje", true);
    //$arr["error"] = true;
}


//----------------------------------------------------------------------------------------------------------------------
// Controles del bloque generico 
//----------------------------------------------------------------------------------------------------------------------
if (is_null($cmb_vta_recibo_item_generico_vta_recibo_concepto_ids))
{
    $arr["error_general_vta_recibo_generico"] .= Lang::_lang("Seleccionar un concepto. ", true);
    $arr["error"] = true;
}
else
{
    foreach ($cmb_vta_recibo_item_generico_vta_recibo_concepto_ids as $key => $cmb_vta_recibo_concepto_id)
    {
        if ($cmb_vta_recibo_concepto_id == '') {
            $arr["cmb_vta_recibo_item_generico_vta_recibo_concepto_id_" . $key] = Lang::_lang("Seleccionar un concepto", true);
            $arr["error"] = true;
        }
        else
        {
            $vta_recibo_concepto = VtaReciboConcepto::getOxId($cmb_vta_recibo_concepto_id);
            if ($vta_recibo_concepto->getEsRetencion())
            {
                if (is_null($arr_vta_recibo_retencion_infos[$key]))
                {
                    $arr["cmb_vta_recibo_item_generico_vta_recibo_concepto_id_" . $key] = Lang::_lang("Indique los datos de la Retencion", true);
                    $arr["error"] = true;
                }
            }            
        }
    }
}


if (is_null($txt_vta_recibo_item_generico_descripcions))
{
    $arr["error_general_vta_recibo_generico"] = Lang::_lang("Agregue una descripcion del Item. ", true);
    $arr["error"] = true;
}
else
{
    foreach ($txt_vta_recibo_item_generico_descripcions as $key => $txt_descripcion)
    {
        if ($txt_descripcion == '')
        {
            $arr["txt_vta_recibo_item_generico_descripcion_" . $key] = Lang::_lang("Agregue una descripcion del Item", true);
            $arr["error"] = true;
        }
    }
}

if (is_null($txt_vta_recibo_item_generico_referencias))
{
    $arr["error_general_vta_recibo_generico"] = Lang::_lang("Agregue una referencia del Item. ", true);
    $arr["error"] = true;
}
else
{
    foreach ($txt_vta_recibo_item_generico_referencias as $key => $txt_referencia)
    {
        if ($cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids[$key] != '')
        {
            $gral_fp_forma_pago = GralFpFormaPago::getOxId($cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids[$key]);
            if($gral_fp_forma_pago)
            {
                if($gral_fp_forma_pago->getRequiereReferencia() == 1)
                {
                    if ($txt_referencia == '')
                    {
                        $arr["txt_vta_recibo_item_generico_referencia_" . $key] = Lang::_lang("Agregue un codigo de referencia", true);
                        $arr["error"] = true;
                    }
                }
            }
        }
    }
}

$suma_txt_importe_unitario = 0;
if (is_null($txt_vta_recibo_item_generico_importe_unitarios))
{
    $arr["error_general_vta_recibo_generico"] .= Lang::_lang("El importe es incorrecto. ", true);
    $arr["error"] = true;
}
else
{
    foreach ($txt_vta_recibo_item_generico_importe_unitarios as $key => $txt_importe_unitario)
    {        
        $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);
        $suma_txt_importe_unitario += $txt_importe_unitario;
        if ($txt_importe_unitario == 0)
        {
            $arr["txt_vta_recibo_item_generico_importe_unitario_" . $key] = Lang::_lang("Importe invalido", true);
            $arr["error"] = true;
        }
        elseif (!Ctrl::esNumero($txt_importe_unitario))
        {
            $arr["txt_vta_recibo_item_generico_importe_unitario_" . $key] = Lang::_lang("Importe invalido", true);
            $arr["error"] = true;
        }
    }
}

if (is_null($cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids))
{
    $arr["error_general_vta_recibo_generico"] .= Lang::_lang("Seleccionar dato" , true);
    $arr["error"] = true;
}
else
{
    $gral_fp_forma_pago_coincidencia = false;
    foreach ($cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids as $key => $cmb_vta_recibo_item_generico_gral_fp_forma_pago_id)
    {
        if ($cmb_vta_recibo_item_generico_gral_fp_forma_pago_id == '')
        {
            $arr["cmb_vta_recibo_item_generico_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Seleccionar dato", true);
            $arr["error"] = true;
        }
        
        if ($cmb_vta_recibo_item_generico_gral_fp_forma_pago_id == $cmb_confirmacion_gral_fp_forma_pago_id)
        {
            $gral_fp_forma_pago_coincidencia = true;
        }
    }
    
    // -------------------------------------------------------------------------
    // se compara que alguna de las formas de pago discriminadas para el cobro coincidan con la 
    // indicada para el presupuesto
    // -------------------------------------------------------------------------
    if(!$gral_fp_forma_pago_coincidencia){
        $arr["cmb_confirmacion_gral_fp_forma_pago_id"] = Lang::_lang("No coincide con el detalle de forma de pago indicado mas abajo", true);
        $arr["error"] = true;        
    }
    
}

// -----------------------------------------------------------------------------
// se controla que exista un registro por cada forma de pago cheque
// -----------------------------------------------------------------------------
$gral_fp_forma_pago_cheque = GralFpFormaPago::getOxCodigo(GralFpFormaPago::TIPO_CHEQUE);
if($gral_fp_forma_pago_cheque)
{
    foreach ($cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids as $key => $cmb_vta_recibo_item_generico_gral_fp_forma_pago_id)
    {
        if ($cmb_vta_recibo_item_generico_gral_fp_forma_pago_id == $gral_fp_forma_pago_cheque->getId())
        {
            if (is_null($arr_vta_recibo_cheque_infos[$key]))
            {
                $arr["cmb_vta_recibo_item_generico_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Indique los datos del Cheque", true);
                $arr["error"] = true;
            }
        }
    }
}

// -----------------------------------------------------------------------------
// se controla que en el caso de multimoneda solo se pueda cobrar al contadto
// -----------------------------------------------------------------------------
$gral_fp_forma_pago_contado = GralFpFormaPago::getOxCodigo(GralFpFormaPago::TIPO_CONTADO);
$gral_moneda_base = GralMoneda::getGralMonedaBase();
if($gral_fp_forma_pago_contado && $gral_moneda_base)
{
    foreach ($cmb_vta_recibo_item_generico_gral_moneda_ids as $key => $cmb_vta_recibo_item_generico_gral_moneda_id)
    {
        if ($cmb_vta_recibo_item_generico_gral_moneda_id != $gral_moneda_base->getId())
        {
            if ($cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids[$key] != $gral_fp_forma_pago_contado->getId())
            {
                $arr["cmb_vta_recibo_item_generico_gral_fp_forma_pago_id_" . $key] = Lang::_lang("Solo se admite multimoneda para pago contado", true);
                $arr["error"] = true;
            }
        }
    }
}

if($fnd_cajero)
{
    if ($cmb_fnd_caja_id == 0) 
    {
        $arr["cmb_fnd_caja_id"] = Lang::_lang("Debe seleccionar una caja ", true);
        $arr["error"] = true;
    }
}

$suma_txt_importe_unitario = number_format($suma_txt_importe_unitario, 2, '.', '');
$suma_txt_importe_unitario = number_format($suma_txt_importe_unitario, 2, '.', '');
$vta_presupuesto_importe_total_con_iva = number_format($vta_presupuesto_importe_total_con_iva, 2, '.', '');

$importe_total_saldo = round($suma_txt_importe_unitario - $importe_tributo_total, 2) - round($vta_presupuesto_importe_total_con_iva, 2);
$importe_total_saldo = abs($importe_total_saldo);

// -----------------------------------------------------------------------------
//Si la suma de los importes de items de recibos menos los tributos no es igual al importe del presupuesto
// -----------------------------------------------------------------------------
//if( round($suma_txt_importe_unitario - $importe_tributo_total, 2) != round($vta_presupuesto_importe_total_con_iva, 2)){    
//if( $importe_total_saldo > 1){
if(!Gral::getCompararIgualdadDeNumeros($suma_txt_importe_unitario - $importe_tributo_total, $vta_presupuesto_importe_total_con_iva, $tolerancia = ConfVariable::getImporteMargenToleranciaConciliacionSaldado())){
    $arr["error_general_vta_recibo_generico"] = Lang::_lang("El importe del recibo debe sumar el mismo monto a facturar", true);
    $arr["error_general_vta_recibo_generico"].= '<br />- Importe a Cobrar: '.Gral::_echoImp($suma_txt_importe_unitario, false, true);
    $arr["error_general_vta_recibo_generico"].= '<br />- Importe a Facturar: '.Gral::_echoImp($vta_presupuesto_importe_total_con_iva + $importe_tributo_total, false, true);
    $arr["error_general_vta_recibo_generico"].= '<br />- Diferencia: '.Gral::_echoImp($suma_txt_importe_unitario - $importe_tributo_total - $vta_presupuesto_importe_total_con_iva, false, true);
    $arr["error"] = true;
}
