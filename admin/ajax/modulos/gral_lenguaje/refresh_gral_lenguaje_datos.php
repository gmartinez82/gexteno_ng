<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralLenguaje::setSesPag($pag);

$criterio = new Criterio(GralLenguaje::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralLenguaje::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_lenguaje');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralLenguaje::getSesPagCantidad(), GralLenguaje::getSesPag());
$gral_lenguajes = GralLenguaje::getGralLenguajesDesdeBackend($paginador, $criterio);

include 'gral_lenguaje_datos.php';
?>

