<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OpeChofer::setSesPag($pag);

$criterio = new Criterio(OpeChofer::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OpeChofer::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ope_chofer');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OpeChofer::getSesPagCantidad(), OpeChofer::getSesPag());
$ope_chofers = OpeChofer::getOpeChofersDesdeBackend($paginador, $criterio);

include 'ope_chofer_datos.php';
?>

