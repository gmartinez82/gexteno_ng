<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdProcesoProductivo::setSesPag($pag);

$criterio = new Criterio(PrdProcesoProductivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdProcesoProductivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_proceso_productivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdProcesoProductivo::getSesPagCantidad(), PrdProcesoProductivo::getSesPag());
$prd_proceso_productivos = PrdProcesoProductivo::getPrdProcesoProductivosDesdeBackend($paginador, $criterio);

include 'prd_proceso_productivo_datos.php';
?>

