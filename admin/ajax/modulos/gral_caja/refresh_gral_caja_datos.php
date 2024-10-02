<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCaja::setSesPag($pag);

$criterio = new Criterio(GralCaja::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCaja::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_caja');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCaja::getSesPagCantidad(), GralCaja::getSesPag());
$gral_cajas = GralCaja::getGralCajasDesdeBackend($paginador, $criterio);

include 'gral_caja_datos.php';
?>

