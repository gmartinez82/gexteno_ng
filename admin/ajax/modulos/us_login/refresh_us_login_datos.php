<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsLogin::setSesPag($pag);

$criterio = new Criterio(UsLogin::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsLogin::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_login');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsLogin::getSesPagCantidad(), UsLogin::getSesPag());
$us_logins = UsLogin::getUsLoginsDesdeBackend($paginador, $criterio);

include 'us_login_datos.php';
?>

