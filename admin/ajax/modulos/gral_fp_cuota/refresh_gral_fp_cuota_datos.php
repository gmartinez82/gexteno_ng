<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralFpCuota::setSesPag($pag);

$criterio = new Criterio(GralFpCuota::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralFpCuota::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_fp_cuota');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralFpCuota::getSesPagCantidad(), GralFpCuota::getSesPag());
$gral_fp_cuotas = GralFpCuota::getGralFpCuotasDesdeBackend($paginador, $criterio);

include 'gral_fp_cuota_datos.php';
?>

