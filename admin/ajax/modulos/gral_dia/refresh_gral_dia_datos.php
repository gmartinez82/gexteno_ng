<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralDia::setSesPag($pag);

$criterio = new Criterio(GralDia::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralDia::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_dia');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralDia::getSesPagCantidad(), GralDia::getSesPag());
$gral_dias = GralDia::getGralDiasDesdeBackend($paginador, $criterio);

include 'gral_dia_datos.php';
?>

