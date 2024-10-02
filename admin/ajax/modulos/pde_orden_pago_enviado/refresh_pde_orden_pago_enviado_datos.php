<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOrdenPagoEnviado::setSesPag($pag);

$criterio = new Criterio(PdeOrdenPagoEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOrdenPagoEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_orden_pago_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOrdenPagoEnviado::getSesPagCantidad(), PdeOrdenPagoEnviado::getSesPag());
$pde_orden_pago_enviados = PdeOrdenPagoEnviado::getPdeOrdenPagoEnviadosDesdeBackend($paginador, $criterio);

include 'pde_orden_pago_enviado_datos.php';
?>

