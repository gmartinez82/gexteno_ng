<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbEjercicio::setSesPag($pag);

$criterio = new Criterio(CntbEjercicio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbEjercicio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_ejercicio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbEjercicio::getSesPagCantidad(), CntbEjercicio::getSesPag());
$cntb_ejercicios = CntbEjercicio::getCntbEjerciciosDesdeBackend($paginador, $criterio);

include 'cntb_ejercicio_datos.php';
?>

