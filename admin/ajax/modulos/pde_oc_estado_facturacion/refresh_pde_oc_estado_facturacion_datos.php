<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcEstadoFacturacion::setSesPag($pag);

$criterio = new Criterio(PdeOcEstadoFacturacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcEstadoFacturacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_estado_facturacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcEstadoFacturacion::getSesPagCantidad(), PdeOcEstadoFacturacion::getSesPag());
$pde_oc_estado_facturacions = PdeOcEstadoFacturacion::getPdeOcEstadoFacturacionsDesdeBackend($paginador, $criterio);

include 'pde_oc_estado_facturacion_datos.php';
?>

