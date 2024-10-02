<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdePedidoPrvProveedorAvisado::setSesPag($pag);

$criterio = new Criterio(PdePedidoPrvProveedorAvisado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdePedidoPrvProveedorAvisado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_pedido_prv_proveedor_avisado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdePedidoPrvProveedorAvisado::getSesPagCantidad(), PdePedidoPrvProveedorAvisado::getSesPag());
$pde_pedido_prv_proveedor_avisados = PdePedidoPrvProveedorAvisado::getPdePedidoPrvProveedorAvisadosDesdeBackend($paginador, $criterio);

include 'pde_pedido_prv_proveedor_avisado_datos.php';
?>

