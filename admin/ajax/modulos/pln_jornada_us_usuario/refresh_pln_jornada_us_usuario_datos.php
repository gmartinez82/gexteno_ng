<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PlnJornadaUsUsuario::setSesPag($pag);

$criterio = new Criterio(PlnJornadaUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PlnJornadaUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pln_jornada_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PlnJornadaUsUsuario::getSesPagCantidad(), PlnJornadaUsUsuario::getSesPag());
$pln_jornada_us_usuarios = PlnJornadaUsUsuario::getPlnJornadaUsUsuariosDesdeBackend($paginador, $criterio);

include 'pln_jornada_us_usuario_datos.php';
?>

