<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OpeOperarioUsUsuario::setSesPag($pag);

$criterio = new Criterio(OpeOperarioUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OpeOperarioUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ope_operario_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OpeOperarioUsUsuario::getSesPagCantidad(), OpeOperarioUsUsuario::getSesPag());
$ope_operario_us_usuarios = OpeOperarioUsUsuario::getOpeOperarioUsUsuariosDesdeBackend($paginador, $criterio);

include 'ope_operario_us_usuario_datos.php';
?>

