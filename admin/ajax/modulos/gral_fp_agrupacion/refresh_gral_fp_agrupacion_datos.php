<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralFpAgrupacion::setSesPag($pag);

$criterio = new Criterio(GralFpAgrupacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralFpAgrupacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_fp_agrupacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralFpAgrupacion::getSesPagCantidad(), GralFpAgrupacion::getSesPag());
$gral_fp_agrupacions = GralFpAgrupacion::getGralFpAgrupacionsDesdeBackend($paginador, $criterio);

include 'gral_fp_agrupacion_datos.php';
?>

