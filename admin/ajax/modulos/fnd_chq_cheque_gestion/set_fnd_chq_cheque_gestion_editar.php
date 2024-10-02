<?php

include '_autoload.php';

$fnd_chq_cheque_id = Gral::getVars(Gral::VARS_POST, 'fnd_chq_cheque_id', 0);
$cmb_fnd_chq_chequera_id = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_chequera_id', null);
$cmb_gral_banco_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_banco_id', 0);
$txt_codigo_sucursal = Gral::getVars(Gral::VARS_POST, 'txt_codigo_sucursal', '');
$txt_descripcion = Gral::getVars(Gral::VARS_POST, 'txt_descripcion', '');
$txt_entregador = Gral::getVars(Gral::VARS_POST, 'txt_entregador', '');
$txt_firmante = Gral::getVars(Gral::VARS_POST, 'txt_firmante', '');
$txt_numero_cheque = Gral::getVars(Gral::VARS_POST, 'txt_numero_cheque', '');
$txt_importe_cheque = Gral::getVars(Gral::VARS_POST, 'txt_importe_cheque', '');
$txt_fecha_emision = Gral::getVars(Gral::VARS_POST, 'txt_fecha_emision', '');
$txt_fecha_cobro = Gral::getVars(Gral::VARS_POST, 'txt_fecha_cobro', '');
$cmb_fnd_chq_tipo_emisor_id = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_tipo_emisor_id', 0);
$cmb_fnd_chq_tipo_emision_id = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_tipo_emision_id', 0);
$cmb_fnd_chq_tipo_pago_id = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_tipo_pago_id', 0);
$cmb_fnd_chq_cruzado = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_cruzado', -1);
$txt_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '');

$txt_importe_cheque = Gral::getImporteDesdePriceFormatToDB($txt_importe_cheque);

$fecha_emision_validada = false;
$fecha_cobro_validada = false;

$fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);

$arr['error'] = false;


if ($cmb_gral_banco_id == 0) {
    $arr['cmb_gral_banco_id'] = Lang::_lang('Debe seleccionar un banco', true);
    $arr['error'] = true;
} else {
    $gral_banco = GralBanco::getOxId($cmb_gral_banco_id);
    if ($gral_banco) {
        $gral_banco_descripcion_corta = $gral_banco->getDescripcionCorta();
    }
}

if (Ctrl::esVacio($txt_codigo_sucursal)) {
    //$arr['txt_codigo_sucursal'] = Lang::_lang('Debe ingresar un codigo sucursal', true);
    //$arr['error'] = true;
}

/* if (Ctrl::esVacio($txt_descripcion)) {
  $arr['txt_descripcion'] = Lang::_lang('Debe ingresar una descripcion', true);
  $arr['error'] = true;
  } */

if (Ctrl::esVacio($txt_entregador)) {
    $arr['txt_entregador'] = Lang::_lang('Debe ingresar datos de un entregador', true);
    $arr['error'] = true;
}

if (Ctrl::esVacio($txt_firmante)) {
    $arr['txt_firmante'] = Lang::_lang('Debe ingresar datos de un firmante', true);
    $arr['error'] = true;
}

if (Ctrl::esVacio($txt_numero_cheque)) {
    $arr['txt_numero_cheque'] = Lang::_lang('Debe ingresar un numero de cheque valido', true);
    $arr['error'] = true;
} else {
    if (!Ctrl::esDigito($txt_numero_cheque)) {
        $arr['txt_numero_cheque'] = Lang::_lang('Debe ingresar un numero de cheque valido', true);
        $arr['error'] = true;
    }
}

if (!Ctrl::esNumero($txt_importe_cheque)) {
    $arr['txt_importe_cheque'] = Lang::_lang('Debe ingresar un importe valido', true);
    $arr['error'] = true;
} else {
    if ($txt_importe_cheque <= 0) {
        $arr['txt_importe_cheque'] = Lang::_lang('Debe ingresar un importe valido', true);
        $arr['error'] = true;
    }
}

if (Ctrl::esVacio($txt_fecha_emision)) {
    $arr['txt_fecha_emision'] = Lang::_lang('Debe ingresar una fecha', true);
    $arr['error'] = true;
} else {
    $txt_fecha_emision_db = Gral::getFechaToDB($txt_fecha_emision);
    if (!Ctrl::esFechaValida($txt_fecha_emision_db)) {
        $arr['txt_fecha_emision'] = Lang::_lang('Debe ingresar una fecha valida', true);
        $arr['error'] = true;
    } else {
        $fecha_emision_validada = true;
    }
}

if (Ctrl::esVacio($txt_fecha_cobro)) {
    $arr['txt_fecha_cobro'] = Lang::_lang('Debe ingresar una fecha', true);
    $arr['error'] = true;
} else {
    $txt_fecha_cobro_db = Gral::getFechaToDB($txt_fecha_cobro);
    if (!Ctrl::esFechaValida($txt_fecha_cobro_db)) {
        $arr['txt_fecha_cobro'] = Lang::_lang('Debe ingresar una fecha valida', true);
        $arr['error'] = true;
    } else {
        if (!Date::esRangoValido($txt_fecha_emision_db, $txt_fecha_cobro_db)) {
            $arr['txt_fecha_emision'] = Lang::_lang('La fecha de emision no puede ser mayor a la fecha de cobro', true);
            $arr['error'] = true;
        } else {
            $fecha_cobro_validada = true;
        }
    }
}

if ($cmb_fnd_chq_tipo_emisor_id == 0) {
    $arr['cmb_fnd_chq_tipo_emisor_id'] = Lang::_lang('Debe seleccionar un tipo emisor', true);
    $arr['error'] = true;
} else {
    $fnd_chq_tipo_emisor = FndChqTipoEmisor::getOxId($cmb_fnd_chq_tipo_emisor_id);
    if ($fnd_chq_tipo_emisor) {
        if ($fnd_chq_tipo_emisor->getCodigo() == FndChqTipoEmisor::TIPO_PROPIO) {
            if ($cmb_fnd_chq_chequera_id == null) {
                $arr['cmb_fnd_chq_chequera_id'] = Lang::_lang('Debe seleccionar una Chequera', true);
                $arr['error'] = true;
            }
        }
    }
}

if ($cmb_fnd_chq_tipo_emision_id == 0) {
    $arr['cmb_fnd_chq_tipo_emision_id'] = Lang::_lang('Debe seleccionar un tipo emision', true);
    $arr['error'] = true;
}

if ($cmb_fnd_chq_tipo_pago_id == 0) {
    $arr['cmb_fnd_chq_tipo_pago_id'] = Lang::_lang('Debe seleccionar un tipo pago', true);
    $arr['error'] = true;
} else {
    $txt_fecha_emision_db = Gral::getFechaToDB($txt_fecha_emision);
    $txt_fecha_cobro_db = Gral::getFechaToDB($txt_fecha_cobro);
    $datetime_fecha_emision = date_create($txt_fecha_emision_db);
    $datetime_fecha_cobro = date_create($txt_fecha_cobro_db);

    if ($fecha_emision_validada && $fecha_cobro_validada) {
        if ($datetime_fecha_emision == $datetime_fecha_cobro) {
            $fnd_chq_tipo_pago = FndChqTipoPago::getOxId($cmb_fnd_chq_tipo_pago_id);
            if ($fnd_chq_tipo_pago) {
                if ($fnd_chq_tipo_pago->getCodigo() != FndChqTipoPago::TIPO_COMUN) {
                    $arr['cmb_fnd_chq_tipo_pago_id'] = Lang::_lang('Debe seleccionar tipo pago "COMUN"', true);
                    $arr['error'] = true;
                }
            }
        } else {
            $fnd_chq_tipo_pago = FndChqTipoPago::getOxId($cmb_fnd_chq_tipo_pago_id);
            if ($fnd_chq_tipo_pago) {
                if ($fnd_chq_tipo_pago->getCodigo() != FndChqTipoPago::TIPO_PAGO_DIFERIDO) {
                    $arr['cmb_fnd_chq_tipo_pago_id'] = Lang::_lang('Debe seleccionar tipo pago "PAGO DIFERIDO"', true);
                    $arr['error'] = true;
                }
            }
        }
    }
}

if ($cmb_fnd_chq_cruzado == -1) {
    $arr['cmb_fnd_chq_cruzado'] = Lang::_lang('Debe seleccionar cruzado o no', true);
    $arr['error'] = true;
}


//Si existe otro cheque con el mismo numero y banco
if (!Ctrl::esVacio($txt_numero_cheque) && $cmb_gral_banco_id != 0) {
    $arr_criterio = array(
        array('campo' => 'numero', 'valor' => $txt_numero_cheque),
        array('campo' => 'gral_banco_id', 'valor' => $cmb_gral_banco_id)
    );
    $fnd_chq_cheque_existente = FndChqCheque::getOxArray($arr_criterio);
    //Gral::prr($fnd_chq_cheque_existente);
    if ($fnd_chq_cheque_existente && ($fnd_chq_cheque_existente->getId() != $fnd_chq_cheque_id)) {
        $arr['txt_numero_cheque'] = Lang::_lang('Existe un cheque con el mismo numero', true);
        $arr['cmb_gral_banco_id'] = Lang::_lang('Existe un cheque con el mismo banco', true);
        $arr['error'] = true;
    }
}

if ($fnd_chq_cheque && $fnd_chq_cheque->getVtaReciboItemId() != 'null') {
    $vta_recibo_item = VtaReciboItem::getOxId($fnd_chq_cheque->getVtaReciboItemId());

    if ($vta_recibo_item) {
        $vta_recibo = $vta_recibo_item->getVtaRecibo();
        if ($vta_recibo) {
            $vta_comprobantes_vinculados_por_conciliacion = $vta_recibo->getVtaComprobantesVinculadosPorConciliacion();
            if (count($vta_comprobantes_vinculados_por_conciliacion['EXTREMO']) > 0) {
                $arr['error'] = true;
                foreach ($vta_comprobantes_vinculados_por_conciliacion['EXTREMO'] as $vta_comprobante_conciliado) {
                    $arr['error_general'] = Lang::_lang('Existen comprobantes vinculados', true) . ': ' . $vta_comprobante_conciliado->getTipoComprobanteSiglas() . ' ' . $vta_comprobante_conciliado->getNumeroComprobanteCompleto() . ' - ' . Lang::_lang('Debe desvincularlos', true);
                }
            }
        }
    }
}


if (!$arr['error']) {
    $txt_descripcion = 'Nro ' . $txt_numero_cheque . ' - ' . $txt_fecha_cobro . ' - ' . $gral_banco_descripcion_corta;
    FndChqCheque::inicializarFndChqCheque($fnd_chq_cheque_id, $cmb_fnd_chq_chequera_id, $cmb_gral_banco_id, $txt_numero_cheque, $txt_importe_cheque, $txt_codigo_sucursal, $txt_descripcion, $txt_fecha_emision, $txt_fecha_cobro, $txt_entregador, $txt_firmante, $cmb_fnd_chq_tipo_emisor_id, $cmb_fnd_chq_tipo_emision_id, $cmb_fnd_chq_tipo_pago_id, $cmb_fnd_chq_cruzado, $txt_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>