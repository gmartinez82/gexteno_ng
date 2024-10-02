<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeRecepcionTipoEstadoFacturacion::setSesPag($pag);

$criterio = new Criterio(PdeRecepcionTipoEstadoFacturacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeRecepcionTipoEstadoFacturacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recepcion_tipo_estado_facturacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeRecepcionTipoEstadoFacturacion::getSesPagCantidad(), PdeRecepcionTipoEstadoFacturacion::getSesPag());
$pde_recepcion_tipo_estado_facturacions = PdeRecepcionTipoEstadoFacturacion::getPdeRecepcionTipoEstadoFacturacionsDesdeBackend($paginador, $criterio);

include 'pde_recepcion_tipo_estado_facturacion_datos.php';
?>

