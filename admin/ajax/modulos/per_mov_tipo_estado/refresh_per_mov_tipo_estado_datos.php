<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerMovTipoEstado::setSesPag($pag);

$criterio = new Criterio(PerMovTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerMovTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_mov_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerMovTipoEstado::getSesPagCantidad(), PerMovTipoEstado::getSesPag());
$per_mov_tipo_estados = PerMovTipoEstado::getPerMovTipoEstadosDesdeBackend($paginador, $criterio);

include 'per_mov_tipo_estado_datos.php';
?>

