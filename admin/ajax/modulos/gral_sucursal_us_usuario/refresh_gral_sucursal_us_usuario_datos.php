<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursalUsUsuario::setSesPag($pag);

$criterio = new Criterio(GralSucursalUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursalUsUsuario::getSesPagCantidad(), GralSucursalUsUsuario::getSesPag());
$gral_sucursal_us_usuarios = GralSucursalUsUsuario::getGralSucursalUsUsuariosDesdeBackend($paginador, $criterio);

include 'gral_sucursal_us_usuario_datos.php';
?>

