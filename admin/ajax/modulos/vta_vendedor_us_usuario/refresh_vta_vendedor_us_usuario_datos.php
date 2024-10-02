<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaVendedorUsUsuario::setSesPag($pag);

$criterio = new Criterio(VtaVendedorUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaVendedorUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_vendedor_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaVendedorUsUsuario::getSesPagCantidad(), VtaVendedorUsUsuario::getSesPag());
$vta_vendedor_us_usuarios = VtaVendedorUsUsuario::getVtaVendedorUsUsuariosDesdeBackend($paginador, $criterio);

include 'vta_vendedor_us_usuario_datos.php';
?>

