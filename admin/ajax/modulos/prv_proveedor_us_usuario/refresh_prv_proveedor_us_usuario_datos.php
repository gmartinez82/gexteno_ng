<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvProveedorUsUsuario::setSesPag($pag);

$criterio = new Criterio(PrvProveedorUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvProveedorUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_proveedor_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvProveedorUsUsuario::getSesPagCantidad(), PrvProveedorUsUsuario::getSesPag());
$prv_proveedor_us_usuarios = PrvProveedorUsUsuario::getPrvProveedorUsUsuariosDesdeBackend($paginador, $criterio);

include 'prv_proveedor_us_usuario_datos.php';
?>

