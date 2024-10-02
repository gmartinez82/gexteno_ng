<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliClienteVtaVendedor::setSesPag($pag);

$criterio = new Criterio(CliClienteVtaVendedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteVtaVendedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente_vta_vendedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliClienteVtaVendedor::getSesPagCantidad(), CliClienteVtaVendedor::getSesPag());
$cli_cliente_vta_vendedors = CliClienteVtaVendedor::getCliClienteVtaVendedorsDesdeBackend($paginador, $criterio);

include 'cli_cliente_vta_vendedor_datos.php';
?>

