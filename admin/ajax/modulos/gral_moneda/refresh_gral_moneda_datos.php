<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralMoneda::setSesPag($pag);

$criterio = new Criterio(GralMoneda::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralMoneda::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_moneda');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralMoneda::getSesPagCantidad(), GralMoneda::getSesPag());
$gral_monedas = GralMoneda::getGralMonedasDesdeBackend($paginador, $criterio);

include 'gral_moneda_datos.php';
?>

