<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AltControlUsUsuario::setSesPag($pag);

$criterio = new Criterio(AltControlUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltControlUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('alt_control_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AltControlUsUsuario::getSesPagCantidad(), AltControlUsUsuario::getSesPag());
$alt_control_us_usuarios = AltControlUsUsuario::getAltControlUsUsuariosDesdeBackend($paginador, $criterio);

include 'alt_control_us_usuario_datos.php';
?>

