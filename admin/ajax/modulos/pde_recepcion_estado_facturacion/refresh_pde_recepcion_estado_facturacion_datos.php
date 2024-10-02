<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeRecepcionEstadoFacturacion::setSesPag($pag);

$criterio = new Criterio(PdeRecepcionEstadoFacturacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeRecepcionEstadoFacturacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recepcion_estado_facturacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeRecepcionEstadoFacturacion::getSesPagCantidad(), PdeRecepcionEstadoFacturacion::getSesPag());
$pde_recepcion_estado_facturacions = PdeRecepcionEstadoFacturacion::getPdeRecepcionEstadoFacturacionsDesdeBackend($paginador, $criterio);

include 'pde_recepcion_estado_facturacion_datos.php';
?>

