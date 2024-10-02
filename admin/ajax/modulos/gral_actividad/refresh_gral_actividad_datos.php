<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralActividad::setSesPag($pag);

$criterio = new Criterio(GralActividad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralActividad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_actividad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralActividad::getSesPagCantidad(), GralActividad::getSesPag());
$gral_actividads = GralActividad::getGralActividadsDesdeBackend($paginador, $criterio);

include 'gral_actividad_datos.php';
?>

