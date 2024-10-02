<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdLineaProduccion::setSesPag($pag);

$criterio = new Criterio(PrdLineaProduccion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdLineaProduccion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_linea_produccion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdLineaProduccion::getSesPagCantidad(), PrdLineaProduccion::getSesPag());
$prd_linea_produccions = PrdLineaProduccion::getPrdLineaProduccionsDesdeBackend($paginador, $criterio);

include 'prd_linea_produccion_datos.php';
?>

