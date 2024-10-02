<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeCentroPedidoPrvProveedor::setSesPag($pag);

$criterio = new Criterio(PdeCentroPedidoPrvProveedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCentroPedidoPrvProveedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_centro_pedido_prv_proveedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeCentroPedidoPrvProveedor::getSesPagCantidad(), PdeCentroPedidoPrvProveedor::getSesPag());
$pde_centro_pedido_prv_proveedors = PdeCentroPedidoPrvProveedor::getPdeCentroPedidoPrvProveedorsDesdeBackend($paginador, $criterio);

include 'pde_centro_pedido_prv_proveedor_datos.php';
?>

