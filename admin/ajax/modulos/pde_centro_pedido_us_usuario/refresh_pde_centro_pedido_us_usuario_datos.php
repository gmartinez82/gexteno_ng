<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeCentroPedidoUsUsuario::setSesPag($pag);

$criterio = new Criterio(PdeCentroPedidoUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCentroPedidoUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_centro_pedido_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeCentroPedidoUsUsuario::getSesPagCantidad(), PdeCentroPedidoUsUsuario::getSesPag());
$pde_centro_pedido_us_usuarios = PdeCentroPedidoUsUsuario::getPdeCentroPedidoUsUsuariosDesdeBackend($paginador, $criterio);

include 'pde_centro_pedido_us_usuario_datos.php';
?>

