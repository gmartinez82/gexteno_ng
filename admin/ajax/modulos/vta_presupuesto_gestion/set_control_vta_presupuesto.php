<?php

$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_id", null);
$chk_vta_presupuesto_ins_insumo = Gral::getVars(Gral::VARS_POST, 'chk_vta_presupuesto_ins_insumo');

$dbsug_cli_cliente_id = Gral::getVars(Gral::VARS_POST, "dbsug_cli_cliente_id", null);
$cmb_gral_tipo_documento_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_documento_id", null);
$txt_persona_descripcion = Gral::getVars(Gral::VARS_POST, "txt_persona_descripcion", '');
$txt_persona_documento = Gral::getVars(Gral::VARS_POST, "txt_persona_documento", '');
$txt_persona_email = Gral::getVars(Gral::VARS_POST, "txt_persona_email", '');

$cmb_vta_presupuesto_tipo_despacho_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_presupuesto_tipo_despacho_id", 0);
$cmb_cli_centro_recepcion_id = Gral::getVars(Gral::VARS_POST, "cmb_cli_centro_recepcion_id", null);
$cmb_gral_sucursal_retiro = Gral::getVars(Gral::VARS_POST, "cmb_gral_sucursal_retiro", null);


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

$cmb_vta_presupuesto_tipo_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_presupuesto_tipo_venta_id", null);

$txt_fecha_presupuesto_to_db = Gral::getFechaToDB($txt_fecha_presupuesto);
$txt_fecha_vencimiento_to_db = Gral::getFechaToDB($txt_fecha_vencimiento);
$txt_fecha_entrega_to_db = Gral::getFechaToDB($txt_fecha_entrega);
$txt_fecha_recordatorio_to_db = Gral::getFechaToDB($txt_fecha_recordatorio);

$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);

$ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();
$vta_presupuesto_importe_total_con_iva = $vta_presupuesto->getImporteTotalPresupuestoConIva();

$vta_presupuesto_tipo_despacho = VtaPresupuestoTipoDespacho::getOxId($cmb_vta_presupuesto_tipo_despacho_id);

// se inicializa variable de configuracion
$cv_importe_minimo_exigencia_info_comprador_consumidor_final = ConfVariable::getVtaComprobanteMinimoExigenciaInfoCompradorConsumidorFinal();

// se inicializa tipo de documento CUIT
$gral_tipo_documento_cuit = GralTipoDocumento::getOxCodigo(GralTipoDocumento::TIPO_CUIT);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($vta_presupuesto_id)) {
    $arr["vta_presupuesto_id"] = Lang::_lang("No se encuentra el presupuesto", true);
    $arr["error"] = true;
}

if ($dbsug_cli_cliente_id == 'null' || $dbsug_cli_cliente_id == '') {

    if (Ctrl::esVacio($txt_persona_descripcion)) {
        $arr["txt_persona_descripcion"] = Lang::_lang("Debe indicar una persona descripcion", true);
        $arr["error"] = true;
    }

    if ($vta_presupuesto_importe_total_con_iva >= $cv_importe_minimo_exigencia_info_comprador_consumidor_final) {
        if (is_null($cmb_gral_tipo_documento_id)) {
            $arr["cmb_gral_tipo_documento_id"] = Lang::_lang("Debe indicar un tipo de documento", true);
            $arr["error"] = true;
        }
        if (Ctrl::esVacio($txt_persona_documento)) {
            $arr["txt_persona_documento"] = Lang::_lang("Debe indicar un documento de la persona", true);
            $arr["error"] = true;
        }
    }

    // si el tipo de documento es CUIT, se controla formato
    if (!is_null($cmb_gral_tipo_documento_id)) {
        $gral_tipo_documento_seleccionado = GralTipoDocumento::getOxId($cmb_gral_tipo_documento_id);
        if ($gral_tipo_documento_seleccionado->getCodigo() == $gral_tipo_documento_cuit->getCodigo()) {
            if (!Ctrl::esRUCValido($txt_persona_documento)) {
                $arr["txt_persona_documento"] = Lang::_lang("Formato de RUC invalido", true);
                $arr["error"] = true;
            }
        }
    }

    // si no es vacio el documento, se controla cliente
    if (!Ctrl::esVacio($txt_persona_documento)) {
        if (CliCliente::getOxCuit($txt_persona_documento)) {
            $arr["txt_persona_documento"] = Lang::_lang("Ya existe un cliente con el CUIT indicado, debe seleccionarlo como cliente", true);
            $arr["error"] = true;
        }
    }

    // si no es vacio el email, se controla formato
    if (!Ctrl::esVacio($txt_persona_email)) {
        if (!Ctrl::esEmail($txt_persona_email)) {
            $arr["txt_persona_email"] = Lang::_lang("Debe indicar un email valido", true);
            $arr["error"] = true;
        }
    }    
    
}else{
    
    if($vta_presupuesto_tipo_despacho){
        if($vta_presupuesto_tipo_despacho->getCodigo() == VtaPresupuestoTipoDespacho::TIPO_RETIRO_SUCURSAL){
            // se verifica el centro de recepcion del cliente
            if ($cmb_gral_sucursal_retiro == 0) {
                $arr["cmb_gral_sucursal_retiro"] = Lang::_lang("Debe indicar una sucursal donde se retira", true);
                $arr["error"] = true;
            }        
        }elseif($vta_presupuesto_tipo_despacho->getCodigo() == VtaPresupuestoTipoDespacho::TIPO_ENVIO_DOMICILIO){
            // se verifica el centro de recepcion del cliente
            if ($cmb_cli_centro_recepcion_id == 0) {
                $arr["cmb_cli_centro_recepcion_id"] = Lang::_lang("Debe indicar un centro de recepcion", true);
                $arr["error"] = true;
            }        
        }
    }else{
        $arr["cmb_vta_presupuesto_tipo_despacho_id"] = Lang::_lang("Debe indicar un tipo de despacho", true);
        $arr["error"] = true;        
    }
    
    
    if ($cmb_gral_actividad_id == 0) {
        $arr["cmb_gral_actividad_id"] = Lang::_lang("Debe indicar la actividad", true);
        $arr["error"] = true;
    }
    if ($cmb_gral_escenario_id == 0) {
        $arr["cmb_gral_escenario_id"] = Lang::_lang("Debe indicar el escenario", true);
        $arr["error"] = true;
    }
    if ($cmb_vta_presupuesto_tipo_venta_id == 0) {
        $arr["cmb_vta_presupuesto_tipo_venta_id"] = Lang::_lang("Debe indicar un tipo de venta", true);
        $arr["error"] = true;
    }
    if (Ctrl::esVacio($cmb_gral_fp_forma_pago_id)) {
        $arr["cmb_gral_fp_forma_pago_id"] = Lang::_lang("Debe indicar una forma de pago", true);
        $arr["error"] = true;
    }

    if (Ctrl::esVacio($cmb_gral_fp_medio_pago_id)) {
        $arr["cmb_gral_fp_medio_pago_id"] = Lang::_lang("Debe indicar un medio de pago", true);
        $arr["error"] = true;
    }

    if (Ctrl::esVacio($cmb_gral_fp_cuota_id)) {
        $arr["cmb_gral_fp_cuota_id"] = Lang::_lang("Debe indicar la cant de cuotas", true);
        $arr["error"] = true;
    }    
    
}

if($vta_presupuesto_tipo_emision){
    if($vta_presupuesto_tipo_emision->getCodigo() == VtaPresupuestoTipoEmision::TIPO_DIFERIDO){
        if ($dbsug_cli_cliente_id <= 0) {
            $arr["dbsug_cli_cliente_id"] = Lang::_lang("Debe indicar un cliente para registrar venta diferida", true);
            $arr["error"] = true;
        }    

        if (Ctrl::esVacio($cmb_gral_fp_forma_pago_id)) {
            $arr["cmb_gral_fp_forma_pago_id"] = Lang::_lang("Debe indicar una forma de pago", true);
            $arr["error"] = true;
        }

        if (Ctrl::esVacio($cmb_gral_fp_medio_pago_id)) {
            $arr["cmb_gral_fp_medio_pago_id"] = Lang::_lang("Debe indicar un medio de pago", true);
            $arr["error"] = true;
        }

        if (Ctrl::esVacio($cmb_gral_fp_cuota_id)) {
            $arr["cmb_gral_fp_cuota_id"] = Lang::_lang("Debe indicar la cant de cuotas", true);
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

// -----------------------------------------------------------------------------
// control sobre items
// -----------------------------------------------------------------------------
foreach($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo){
    
    $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
    $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio);
    
    // -------------------------------------------------------------------------
    // control de cantidad minima venta
    // -------------------------------------------------------------------------
    if($ins_lista_precio->getCantidadMinimaVenta() > $vta_presupuesto_ins_insumo->getCantidad()){
        $arr["error_general"] = 'El producto '.$ins_insumo->getCodigoInterno().' no cumple con la cantidad minima de venta ('.$ins_lista_precio->getCantidadMinimaVenta().')';
        $arr["error"] = true;
    }
}

foreach($txt_cantidads as $i => $txt_cantidad){    
}


//if ($cmb_vta_comprador_id <= 0) {
//    $arr["cmb_vta_comprador_id"] = Lang::_lang("Debe indicar un comprador/mecanico", true);
//    $arr["error"] = true;
//}
//if (Ctrl::esVacio($cmb_ins_tipo_lista_precio_id)) {
//$arr["cmb_ins_tipo_lista_precio_id"] = Lang::_lang("Debe indicar una lista de precio", true);
//$arr["error"] = true;
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
// se verifica si el presupuesto cumple condiciones generales para ser registrado
// -----------------------------------------------------------------------------
//if ($vta_presupuesto_importe_total_con_iva < $ins_tipo_lista_precio->getImporteMinimo()) {
//    $arr["error_general"] = Lang::_lang("El presupuesto no cumple el importe minimo exigido para la lista de precios", true).' - Minimo: '.Gral::_echoImp($ins_tipo_lista_precio->getImporteMinimo(), false, true);
//    $arr["error"] = true;
//}