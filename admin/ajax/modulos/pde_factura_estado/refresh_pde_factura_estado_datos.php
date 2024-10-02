<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaEstado::setSesPag($pag);

$criterio = new Criterio(PdeFacturaEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaEstado::getSesPagCantidad(), PdeFacturaEstado::getSesPag());
$pde_factura_estados = PdeFacturaEstado::getPdeFacturaEstadosDesdeBackend($paginador, $criterio);

include 'pde_factura_estado_datos.php';
?>

