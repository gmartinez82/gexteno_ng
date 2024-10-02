<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaTipoEstado::setSesPag($pag);

$criterio = new Criterio(PdeFacturaTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaTipoEstado::getSesPagCantidad(), PdeFacturaTipoEstado::getSesPag());
$pde_factura_tipo_estados = PdeFacturaTipoEstado::getPdeFacturaTipoEstadosDesdeBackend($paginador, $criterio);

include 'pde_factura_tipo_estado_datos.php';
?>

