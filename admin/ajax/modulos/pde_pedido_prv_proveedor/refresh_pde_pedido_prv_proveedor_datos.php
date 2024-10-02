<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdePedidoPrvProveedor::setSesPag($pag);

$criterio = new Criterio(PdePedidoPrvProveedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdePedidoPrvProveedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_pedido_prv_proveedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdePedidoPrvProveedor::getSesPagCantidad(), PdePedidoPrvProveedor::getSesPag());
$pde_pedido_prv_proveedors = PdePedidoPrvProveedor::getPdePedidoPrvProveedorsDesdeBackend($paginador, $criterio);

include 'pde_pedido_prv_proveedor_datos.php';
?>

