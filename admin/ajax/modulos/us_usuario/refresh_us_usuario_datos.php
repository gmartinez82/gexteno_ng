<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsUsuario::setSesPag($pag);

$criterio = new Criterio(UsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsUsuario::getSesPagCantidad(), UsUsuario::getSesPag());
$us_usuarios = UsUsuario::getUsUsuariosDesdeBackend($paginador, $criterio);

include 'us_usuario_datos.php';
?>

