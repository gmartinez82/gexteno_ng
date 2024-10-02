<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPresupuestoEnviado::setSesPag($pag);

$criterio = new Criterio(VtaPresupuestoEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPresupuestoEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_presupuesto_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPresupuestoEnviado::getSesPagCantidad(), VtaPresupuestoEnviado::getSesPag());
$vta_presupuesto_enviados = VtaPresupuestoEnviado::getVtaPresupuestoEnviadosDesdeBackend($paginador, $criterio);

include 'vta_presupuesto_enviado_datos.php';
?>

