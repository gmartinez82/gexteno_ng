<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralNovedadMotivo::setSesPag($pag);

$criterio = new Criterio(GralNovedadMotivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralNovedadMotivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_novedad_motivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralNovedadMotivo::getSesPagCantidad(), GralNovedadMotivo::getSesPag());
$gral_novedad_motivos = GralNovedadMotivo::getGralNovedadMotivosDesdeBackend($paginador, $criterio);

include 'gral_novedad_motivo_datos.php';
?>

