<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AltControl::setSesPag($pag);

$criterio = new Criterio(AltControl::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltControl::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('alt_control');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AltControl::getSesPagCantidad(), AltControl::getSesPag());
$alt_controls = AltControl::getAltControlsDesdeBackend($paginador, $criterio);

include 'alt_control_datos.php';
?>

