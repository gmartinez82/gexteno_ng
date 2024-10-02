<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliClienteGralActividad::setSesPag($pag);

$criterio = new Criterio(CliClienteGralActividad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteGralActividad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente_gral_actividad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliClienteGralActividad::getSesPagCantidad(), CliClienteGralActividad::getSesPag());
$cli_cliente_gral_actividads = CliClienteGralActividad::getCliClienteGralActividadsDesdeBackend($paginador, $criterio);

include 'cli_cliente_gral_actividad_datos.php';
?>

