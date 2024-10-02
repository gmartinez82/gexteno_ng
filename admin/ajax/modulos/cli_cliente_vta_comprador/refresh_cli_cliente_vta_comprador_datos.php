<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliClienteVtaComprador::setSesPag($pag);

$criterio = new Criterio(CliClienteVtaComprador::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteVtaComprador::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente_vta_comprador');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliClienteVtaComprador::getSesPagCantidad(), CliClienteVtaComprador::getSesPag());
$cli_cliente_vta_compradors = CliClienteVtaComprador::getCliClienteVtaCompradorsDesdeBackend($paginador, $criterio);

include 'cli_cliente_vta_comprador_datos.php';
?>

