<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliTelefono::setSesPag($pag);

$criterio = new Criterio(CliTelefono::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliTelefono::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_telefono');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliTelefono::getSesPagCantidad(), CliTelefono::getSesPag());
$cli_telefonos = CliTelefono::getCliTelefonosDesdeBackend($paginador, $criterio);

include 'cli_telefono_datos.php';
?>

