<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPresupuestoCancelacion::setSesPag($pag);

$criterio = new Criterio(VtaPresupuestoCancelacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPresupuestoCancelacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_presupuesto_cancelacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPresupuestoCancelacion::getSesPagCantidad(), VtaPresupuestoCancelacion::getSesPag());
$vta_presupuesto_cancelacions = VtaPresupuestoCancelacion::getVtaPresupuestoCancelacionsDesdeBackend($paginador, $criterio);

include 'vta_presupuesto_cancelacion_datos.php';
?>

