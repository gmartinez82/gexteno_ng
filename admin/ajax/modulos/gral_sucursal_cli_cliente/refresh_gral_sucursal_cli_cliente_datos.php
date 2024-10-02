<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursalCliCliente::setSesPag($pag);

$criterio = new Criterio(GralSucursalCliCliente::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalCliCliente::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal_cli_cliente');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursalCliCliente::getSesPagCantidad(), GralSucursalCliCliente::getSesPag());
$gral_sucursal_cli_clientes = GralSucursalCliCliente::getGralSucursalCliClientesDesdeBackend($paginador, $criterio);

include 'gral_sucursal_cli_cliente_datos.php';
?>

