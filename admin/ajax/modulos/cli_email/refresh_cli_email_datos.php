<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliEmail::setSesPag($pag);

$criterio = new Criterio(CliEmail::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliEmail::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_email');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliEmail::getSesPagCantidad(), CliEmail::getSesPag());
$cli_emails = CliEmail::getCliEmailsDesdeBackend($paginador, $criterio);

include 'cli_email_datos.php';
?>

