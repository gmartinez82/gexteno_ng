<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiTipoEstado::setSesPag($pag);

$criterio = new Criterio(PdiTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiTipoEstado::getSesPagCantidad(), PdiTipoEstado::getSesPag());
$pdi_tipo_estados = PdiTipoEstado::getPdiTipoEstadosDesdeBackend($paginador, $criterio);

include 'pdi_tipo_estado_datos.php';
?>

