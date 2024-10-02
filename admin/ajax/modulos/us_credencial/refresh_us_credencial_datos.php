<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsCredencial::setSesPag($pag);

$criterio = new Criterio(UsCredencial::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsCredencial::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_credencial');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsCredencial::getSesPagCantidad(), UsCredencial::getSesPag());
$us_credencials = UsCredencial::getUsCredencialsDesdeBackend($paginador, $criterio);

include 'us_credencial_datos.php';
?>

