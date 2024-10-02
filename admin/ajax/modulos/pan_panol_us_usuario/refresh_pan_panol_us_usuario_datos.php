<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PanPanolUsUsuario::setSesPag($pag);

$criterio = new Criterio(PanPanolUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PanPanolUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pan_panol_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PanPanolUsUsuario::getSesPagCantidad(), PanPanolUsUsuario::getSesPag());
$pan_panol_us_usuarios = PanPanolUsUsuario::getPanPanolUsUsuariosDesdeBackend($paginador, $criterio);

include 'pan_panol_us_usuario_datos.php';
?>

