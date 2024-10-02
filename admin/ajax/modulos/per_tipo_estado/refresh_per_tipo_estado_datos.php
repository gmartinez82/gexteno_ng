<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerTipoEstado::setSesPag($pag);

$criterio = new Criterio(PerTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerTipoEstado::getSesPagCantidad(), PerTipoEstado::getSesPag());
$per_tipo_estados = PerTipoEstado::getPerTipoEstadosDesdeBackend($paginador, $criterio);

include 'per_tipo_estado_datos.php';
?>

