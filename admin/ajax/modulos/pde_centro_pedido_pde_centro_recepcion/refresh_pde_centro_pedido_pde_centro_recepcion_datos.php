<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeCentroPedidoPdeCentroRecepcion::setSesPag($pag);

$criterio = new Criterio(PdeCentroPedidoPdeCentroRecepcion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCentroPedidoPdeCentroRecepcion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_centro_pedido_pde_centro_recepcion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeCentroPedidoPdeCentroRecepcion::getSesPagCantidad(), PdeCentroPedidoPdeCentroRecepcion::getSesPag());
$pde_centro_pedido_pde_centro_recepcions = PdeCentroPedidoPdeCentroRecepcion::getPdeCentroPedidoPdeCentroRecepcionsDesdeBackend($paginador, $criterio);

include 'pde_centro_pedido_pde_centro_recepcion_datos.php';
?>

