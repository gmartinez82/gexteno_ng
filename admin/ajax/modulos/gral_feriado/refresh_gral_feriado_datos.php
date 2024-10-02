<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralFeriado::setSesPag($pag);

$criterio = new Criterio(GralFeriado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralFeriado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_feriado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralFeriado::getSesPagCantidad(), GralFeriado::getSesPag());
$gral_feriados = GralFeriado::getGralFeriadosDesdeBackend($paginador, $criterio);

include 'gral_feriado_datos.php';
?>

