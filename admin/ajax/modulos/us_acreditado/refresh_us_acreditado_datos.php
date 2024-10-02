<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsAcreditado::setSesPag($pag);

$criterio = new Criterio(UsAcreditado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsAcreditado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_acreditado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsAcreditado::getSesPagCantidad(), UsAcreditado::getSesPag());
$us_acreditados = UsAcreditado::getUsAcreditadosDesdeBackend($paginador, $criterio);

include 'us_acreditado_datos.php';
?>

