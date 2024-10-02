<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsClasificacion::setSesPag($pag);

$criterio = new Criterio(InsClasificacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsClasificacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_clasificacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsClasificacion::getSesPagCantidad(), InsClasificacion::getSesPag());
$ins_clasificacions = InsClasificacion::getInsClasificacionsDesdeBackend($paginador, $criterio);

include 'ins_clasificacion_datos.php';
?>

