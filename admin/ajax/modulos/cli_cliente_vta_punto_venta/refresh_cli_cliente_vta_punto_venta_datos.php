<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliClienteVtaPuntoVenta::setSesPag($pag);

$criterio = new Criterio(CliClienteVtaPuntoVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteVtaPuntoVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente_vta_punto_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliClienteVtaPuntoVenta::getSesPagCantidad(), CliClienteVtaPuntoVenta::getSesPag());
$cli_cliente_vta_punto_ventas = CliClienteVtaPuntoVenta::getCliClienteVtaPuntoVentasDesdeBackend($paginador, $criterio);

include 'cli_cliente_vta_punto_venta_datos.php';
?>

