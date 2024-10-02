<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralRutaGralDia::setSesPag($pag);

$criterio = new Criterio(GralRutaGralDia::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralRutaGralDia::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_ruta_gral_dia');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralRutaGralDia::getSesPagCantidad(), GralRutaGralDia::getSesPag());
$gral_ruta_gral_dias = GralRutaGralDia::getGralRutaGralDiasDesdeBackend($paginador, $criterio);

include 'gral_ruta_gral_dia_datos.php';
?>

