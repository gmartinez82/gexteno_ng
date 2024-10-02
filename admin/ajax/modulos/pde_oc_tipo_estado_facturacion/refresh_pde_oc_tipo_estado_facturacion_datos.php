<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcTipoEstadoFacturacion::setSesPag($pag);

$criterio = new Criterio(PdeOcTipoEstadoFacturacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcTipoEstadoFacturacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_tipo_estado_facturacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcTipoEstadoFacturacion::getSesPagCantidad(), PdeOcTipoEstadoFacturacion::getSesPag());
$pde_oc_tipo_estado_facturacions = PdeOcTipoEstadoFacturacion::getPdeOcTipoEstadoFacturacionsDesdeBackend($paginador, $criterio);

include 'pde_oc_tipo_estado_facturacion_datos.php';
?>

