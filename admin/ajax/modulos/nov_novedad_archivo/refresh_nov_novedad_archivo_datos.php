<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NovNovedadArchivo::setSesPag($pag);

$criterio = new Criterio(NovNovedadArchivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NovNovedadArchivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('nov_novedad_archivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NovNovedadArchivo::getSesPagCantidad(), NovNovedadArchivo::getSesPag());
$nov_novedad_archivos = NovNovedadArchivo::getNovNovedadArchivosDesdeBackend($paginador, $criterio);

include 'nov_novedad_archivo_datos.php';
?>

