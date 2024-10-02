<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliDomicilio::setSesPag($pag);

$criterio = new Criterio(CliDomicilio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliDomicilio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_domicilio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliDomicilio::getSesPagCantidad(), CliDomicilio::getSesPag());
$cli_domicilios = CliDomicilio::getCliDomiciliosDesdeBackend($paginador, $criterio);

include 'cli_domicilio_datos.php';
?>

