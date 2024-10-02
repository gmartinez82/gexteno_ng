<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AltModulo::setSesPag($pag);

$criterio = new Criterio(AltModulo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltModulo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('alt_modulo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AltModulo::getSesPagCantidad(), AltModulo::getSesPag());
$alt_modulos = AltModulo::getAltModulosDesdeBackend($paginador, $criterio);

include 'alt_modulo_datos.php';
?>

