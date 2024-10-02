<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerEstado::setSesPag($pag);

$criterio = new Criterio(PerEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerEstado::getSesPagCantidad(), PerEstado::getSesPag());
$per_estados = PerEstado::getPerEstadosDesdeBackend($paginador, $criterio);

include 'per_estado_datos.php';
?>

