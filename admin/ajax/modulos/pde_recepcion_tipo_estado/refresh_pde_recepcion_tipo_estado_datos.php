<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeRecepcionTipoEstado::setSesPag($pag);

$criterio = new Criterio(PdeRecepcionTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeRecepcionTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recepcion_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeRecepcionTipoEstado::getSesPagCantidad(), PdeRecepcionTipoEstado::getSesPag());
$pde_recepcion_tipo_estados = PdeRecepcionTipoEstado::getPdeRecepcionTipoEstadosDesdeBackend($paginador, $criterio);

include 'pde_recepcion_tipo_estado_datos.php';
?>

