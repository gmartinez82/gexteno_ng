<?php
include "_autoload.php";
include Gral::getPathAbs() . 'admin/control/seguridad_modulo.php';

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$vta_hoja_ruta_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);


// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$cmb_gral_ruta_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_ruta_id', 0, Gral::TIPO_INTEGER);
$cmb_ope_chofer_id = Gral::getVars(Gral::VARS_POST, 'cmb_ope_chofer_id', 0, Gral::TIPO_INTEGER);
$txt_fecha_despacho = Gral::getVars(Gral::VARS_POST, 'txt_fecha_despacho', '', Gral::TIPO_STRING);
$txt_fecha_maxima_pedido = Gral::getVars(Gral::VARS_POST, 'txt_fecha_maxima_pedido', '', Gral::TIPO_STRING);
$txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '', Gral::TIPO_STRING);

$txt_fecha_despacho = Gral::getFechaToDB($txt_fecha_despacho);
$txt_fecha_maxima_pedido = Gral::getFechaToDB($txt_fecha_maxima_pedido);


//Gral::prr($_POST);
// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);

$arr['error'] = false;

if ($cmb_gral_ruta_id == 0) {
    $arr['cmb_gral_ruta_id'] = Lang::_lang('Debe seleccionar una ruta', true);
    $arr['error'] = true;
}

if ($cmb_ope_chofer_id == 0) {
    //$arr['cmb_ope_chofer_id'] = Lang::_lang('Debe seleccionar un chofer', true);
    //$arr['error'] = true;
}
if (!Ctrl::esFechaValida($txt_fecha_despacho, false)) {
    $arr["error"] = true;
    $arr["txt_fecha_despacho"] = Lang::_lang('Debe ingresar una fecha valida', true);
}

if (!Ctrl::esFechaValida($txt_fecha_maxima_pedido, false)) {
    $arr["error"] = true;
    $arr["txt_fecha_maxima_pedido"] = Lang::_lang('Debe ingresar una fecha valida', true);
}else{
    if (!Date::esRangoValido($txt_fecha_maxima_pedido, $txt_fecha_despacho)) {
        $arr["error"] = true;
        $arr["txt_fecha_maxima_pedido"] = Lang::_lang('No puede ser mayor que la fecha de despacho', true);
    }    
}

if ($cmb_gral_ruta_id != 0 && $cmb_ope_chofer_id != 0) {
    $array = array(
        array('campo' => 'gral_ruta_id', 'valor' => $cmb_gral_ruta_id),
        array('campo' => 'ope_chofer_id', 'valor' => $cmb_ope_chofer_id),
    );
    $vta_hoja_ruta_control = VtaHojaRuta::getOxArray($array);
    /* if($vta_hoja_ruta_control && ($vta_hoja_ruta_control->getId() != $vta_hoja_ruta->getId()))
      {
      $arr['error_general'] = Lang::_lang('Existe una configuracion igual de ruta y chofer', true);
      $arr['error'] = true;
      } */
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang('Debe ingresar una observacion', true);
}

if (!$arr['error']) {
    VtaHojaRuta::setHojaRuta($vta_hoja_ruta_id, $cmb_gral_ruta_id, $cmb_ope_chofer_id, $txt_fecha_despacho, $txt_fecha_maxima_pedido, $txa_observacion);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
