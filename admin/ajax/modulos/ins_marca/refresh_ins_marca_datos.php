<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsMarca::setSesPag($pag);

$criterio = new Criterio(InsMarca::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsMarca::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_marca');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsMarca::getSesPagCantidad(), InsMarca::getSesPag());
$ins_marcas = InsMarca::getInsMarcasDesdeBackend($paginador, $criterio);

include 'ins_marca_datos.php';
?>

