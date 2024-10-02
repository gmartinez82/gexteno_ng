<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeRecibo::setSesPag($pag);

$criterio = new Criterio(PdeRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeRecibo::getSesPagCantidad(), PdeRecibo::getSesPag());
$pde_recibos = PdeRecibo::getPdeRecibosDesdeBackend($paginador, $criterio);

include 'pde_recibo_datos.php';
?>

