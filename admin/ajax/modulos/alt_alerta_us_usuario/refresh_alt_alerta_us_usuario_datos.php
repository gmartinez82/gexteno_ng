<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AltAlertaUsUsuario::setSesPag($pag);

$criterio = new Criterio(AltAlertaUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltAlertaUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('alt_alerta_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AltAlertaUsUsuario::getSesPagCantidad(), AltAlertaUsUsuario::getSesPag());
$alt_alerta_us_usuarios = AltAlertaUsUsuario::getAltAlertaUsUsuariosDesdeBackend($paginador, $criterio);

include 'alt_alerta_us_usuario_datos.php';
?>

