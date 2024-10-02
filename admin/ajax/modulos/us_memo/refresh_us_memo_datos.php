<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsMemo::setSesPag($pag);

$criterio = new Criterio(UsMemo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsMemo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_memo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsMemo::getSesPagCantidad(), UsMemo::getSesPag());
$us_memos = UsMemo::getUsMemosDesdeBackend($paginador, $criterio);

include 'us_memo_datos.php';
?>

