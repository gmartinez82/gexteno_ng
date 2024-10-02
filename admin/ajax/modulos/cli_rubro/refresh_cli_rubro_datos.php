<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliRubro::setSesPag($pag);

$criterio = new Criterio(CliRubro::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliRubro::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_rubro');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliRubro::getSesPagCantidad(), CliRubro::getSesPag());
$cli_rubros = CliRubro::getCliRubrosDesdeBackend($paginador, $criterio);

include 'cli_rubro_datos.php';
?>

