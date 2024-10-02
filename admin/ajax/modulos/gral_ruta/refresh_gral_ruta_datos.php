<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralRuta::setSesPag($pag);

$criterio = new Criterio(GralRuta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralRuta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_ruta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralRuta::getSesPagCantidad(), GralRuta::getSesPag());
$gral_rutas = GralRuta::getGralRutasDesdeBackend($paginador, $criterio);

include 'gral_ruta_datos.php';
?>

