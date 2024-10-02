<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsMemoTipoEstado::setSesPag($pag);

$criterio = new Criterio(UsMemoTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsMemoTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_memo_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsMemoTipoEstado::getSesPagCantidad(), UsMemoTipoEstado::getSesPag());
$us_memo_tipo_estados = UsMemoTipoEstado::getUsMemoTipoEstadosDesdeBackend($paginador, $criterio);

include 'us_memo_tipo_estado_datos.php';
?>

