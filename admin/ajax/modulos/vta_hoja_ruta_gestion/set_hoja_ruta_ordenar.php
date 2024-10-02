<?php

include "_autoload.php";

// ------------------------------------------------------------------
// el ID se recibe por GET


// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
// ------------------------------------------------------------------
$vta_hoja_ruta_id = Gral::getVars(Gral::VARS_POST, 'vta_hoja_ruta_id', 0, Gral::TIPO_INTEGER);
$ordenar_por = Gral::getVars(Gral::VARS_POST, 'ordenar_por', '', Gral::TIPO_STRING);
$arr_localidad_ids = Gral::getVars(Gral::VARS_POST, 'localidad', '');
$arr_item_centro_recepcion_ids = Gral::getVars(Gral::VARS_POST, 'item', '');
//Gral::prr($_POST);

VtaHojaRuta::setOrdenarRuta($vta_hoja_ruta_id, $ordenar_por, $arr_localidad_ids, $arr_item_centro_recepcion_ids);