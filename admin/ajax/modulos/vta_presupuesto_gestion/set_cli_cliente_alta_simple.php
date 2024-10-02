<?php
include "_autoload.php";

$cmb_cli_tipo_cliente_id = Gral::getVars(Gral::VARS_POST, "cmb_cli_tipo_cliente_id", null);
$cmb_gral_tipo_personeria_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_personeria_id", null);
$txt_persona_descripcion = Gral::getVars(Gral::VARS_POST, "txt_persona_descripcion", null);
$cmb_gral_tipo_documento_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_documento_id", null);
$txt_persona_documento = Gral::getVars(Gral::VARS_POST, "txt_persona_documento", null);
$cmb_condicion_iva_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_condicion_iva_id", null);
$txt_razon_social = Gral::getVars(Gral::VARS_POST, "txt_razon_social", null);
$txt_domicilio_legal = Gral::getVars(Gral::VARS_POST, "txt_domicilio_legal", null);
$txt_numero_casa = Gral::getVars(Gral::VARS_POST, "txt_numero_casa", null);
$txt_persona_email = Gral::getVars(Gral::VARS_POST, "txt_persona_email", null);
$txt_telefono = Gral::getVars(Gral::VARS_POST, "txt_telefono", null);
$cmb_geo_localidad_id = Gral::getVars(Gral::VARS_POST, "cmb_geo_localidad_id", null);
$cmb_iva_exceptuado = Gral::getVars(Gral::VARS_POST, "cmb_iva_exceptuado", null);
//Gral::prr($_POST);

$txt_persona_documento = str_replace(array('.', ' '), '', $txt_persona_documento);

if (Ctrl::esVacio($cmb_cli_tipo_cliente_id)) {
    $arr["cmb_cli_tipo_cliente_id"] = Lang::_lang("Debe indicar tipo de cliente", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($cmb_gral_tipo_personeria_id)) {
    $arr["cmb_gral_tipo_personeria_id"] = Lang::_lang("Debe indicar tipo personeria", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_persona_descripcion)) {
    $arr["txt_persona_descripcion"] = Lang::_lang("Debe indicar una persona descripcion", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($cmb_gral_tipo_documento_id)) {
    $arr["cmb_gral_tipo_documento_id"] = Lang::_lang("Debe indicar tipo documento", true);
    $arr["error"] = true;
}
else {
    $gral_tipo_documento = GralTipoDocumento::getOxId($cmb_gral_tipo_documento_id);

    if (Ctrl::esVacio($txt_persona_documento)) {
        $arr["txt_persona_documento"] = Lang::_lang("Debe indicar un documento", true);
        $arr["error"] = true;
    }
    else {
        if (Ctrl::esMaxCaracteres(100, $txt_persona_documento)) {
            $arr["txt_persona_documento"] = Lang::_lang("Excede el maximo permitido", true);
            $arr["error"] = true;
        }
        else {
            $o = CliCliente::getOxCuit($txt_persona_documento);
            if ($o /* && $o->getId() != $this->getId() */) {
                $arr["txt_persona_documento"] = Lang::_lang('Documento vinculado a otro cliente', true) .': "'. $o->getDescripcion().'"';
                $arr["error"] = true;
            }
            else {

                if ($gral_tipo_documento && $gral_tipo_documento->getCodigo() == GralTipoDocumento::TIPO_CUIT) {
                    // -------------------------------------------------
                    // se controla formato del CUIT
                    // -------------------------------------------------
                    if (!Ctrl::esRUCValido($txt_persona_documento)) {
                        $arr["txt_persona_documento"] = Lang::_lang('Formato de RUC Invalido', true);
                        $arr["error"] = true;
                    }
                }
            }
        }
    }
}

if (Ctrl::esVacio($cmb_condicion_iva_id)) {
    $arr["cmb_gral_condicion_iva_id"] = Lang::_lang("Debe indicar una condicion iva", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_razon_social)) {
    $arr["txt_razon_social"] = Lang::_lang("Debe indicar una razon social", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_domicilio_legal)) {
    $arr["txt_domicilio_legal"] = Lang::_lang("Debe indicar un domicilio", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_numero_casa)) {
    $arr["txt_numero_casa"] = Lang::_lang("Debe indicar un nro de casa", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_telefono)) {
    $arr["txt_telefono"] = Lang::_lang("Debe indicar un telefono", true);
    $arr["error"] = true;
}

if (!Ctrl::esVacio($txt_persona_email)) {
    if (!Ctrl::esEmail($txt_persona_email)) {
        $arr["txt_persona_email"] = Lang::_lang("Debe indicar un email valido", true);
        $arr["error"] = true;
    }
}

if (Ctrl::esVacio($cmb_geo_localidad_id)) {
    $arr["cmb_geo_localidad_id"] = Lang::_lang("Debe indicar una localidad", true);
    $arr["error"] = true;
}


//Gral::prr($arr);

if (!$arr["error"]) {
    $cli_cliente = CliCliente::setInicializarCliClienteSimple($cmb_cli_tipo_cliente_id, $cmb_gral_tipo_personeria_id, $txt_persona_descripcion, $cmb_gral_tipo_documento_id, $txt_persona_documento, $cmb_condicion_iva_id, $txt_razon_social, $txt_domicilio_legal, $txt_numero_casa, $txt_persona_email, $txt_telefono, $cmb_geo_localidad_id, $cmb_iva_exceptuado);

    $arr['cliente_id'] = $cli_cliente->getId();
    $arr['persona_descripcion'] = $cli_cliente->getDescripcion();
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>
