<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsMensaje::setSesPag($pag);

$criterio = new Criterio(UsMensaje::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsMensaje::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_mensaje');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsMensaje::getSesPagCantidad(), UsMensaje::getSesPag());
$us_mensajes = UsMensaje::getUsMensajesDesdeBackend($paginador, $criterio);

include 'us_mensaje_datos.php';
?>

