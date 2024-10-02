<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeArsch01RespMensaje::setSesPag($pag);

$criterio = new Criterio(EkuDeArsch01RespMensaje::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeArsch01RespMensaje::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_arsch01_resp_mensaje');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeArsch01RespMensaje::getSesPagCantidad(), EkuDeArsch01RespMensaje::getSesPag());
$eku_de_arsch01_resp_mensajes = EkuDeArsch01RespMensaje::getEkuDeArsch01RespMensajesDesdeBackend($paginador, $criterio);

include 'eku_de_arsch01_resp_mensaje_datos.php';
?>

