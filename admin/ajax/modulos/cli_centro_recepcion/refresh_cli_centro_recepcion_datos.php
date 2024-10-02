<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliCentroRecepcion::setSesPag($pag);

$criterio = new Criterio(CliCentroRecepcion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliCentroRecepcion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_centro_recepcion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliCentroRecepcion::getSesPagCantidad(), CliCentroRecepcion::getSesPag());
$cli_centro_recepcions = CliCentroRecepcion::getCliCentroRecepcionsDesdeBackend($paginador, $criterio);

include 'cli_centro_recepcion_datos.php';
?>

