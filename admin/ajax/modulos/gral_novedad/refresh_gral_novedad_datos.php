<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralNovedad::setSesPag($pag);

$criterio = new Criterio(GralNovedad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralNovedad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_novedad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralNovedad::getSesPagCantidad(), GralNovedad::getSesPag());
$gral_novedads = GralNovedad::getGralNovedadsDesdeBackend($paginador, $criterio);

include 'gral_novedad_datos.php';
?>

