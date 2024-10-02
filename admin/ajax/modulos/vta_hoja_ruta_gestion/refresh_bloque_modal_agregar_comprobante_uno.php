<?php
include "_autoload.php";
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$identificador = Gral::getVars(Gral::VARS_GET, 'identificador', 0);
$identificador_comprobante = Gral::getVars(Gral::VARS_GET, 'identificador_comprobante', 0);
$clase = Gral::getVars(Gral::VARS_GET, 'clase', '', Gral::TIPO_STRING);

$vta_hoja_ruta = VtaHojaRuta::getOxId($identificador);


//$vta_remito = VtaRemito::getOxId($identificador_comprobante);
$obj_vta_comprobante = $clase::getOxId($identificador_comprobante);
//Gral::prr($vta_hoja_ruta);
//Gral::prr($vta_remito);
include 'bloque_modal_agregar_comprobante_uno.php';