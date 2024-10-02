<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOrdenPagoTipoEstado::setSesPag($pag);

$criterio = new Criterio(PdeOrdenPagoTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOrdenPagoTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_orden_pago_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOrdenPagoTipoEstado::getSesPagCantidad(), PdeOrdenPagoTipoEstado::getSesPag());
$pde_orden_pago_tipo_estados = PdeOrdenPagoTipoEstado::getPdeOrdenPagoTipoEstadosDesdeBackend($paginador, $criterio);

include 'pde_orden_pago_tipo_estado_datos.php';
?>

