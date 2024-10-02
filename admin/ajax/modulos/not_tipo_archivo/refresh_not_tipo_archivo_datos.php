<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NotTipoArchivo::setSesPag($pag);

$criterio = new Criterio(NotTipoArchivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotTipoArchivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('not_tipo_archivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NotTipoArchivo::getSesPagCantidad(), NotTipoArchivo::getSesPag());
$not_tipo_archivos = NotTipoArchivo::getNotTipoArchivosDesdeBackend($paginador, $criterio);

include 'not_tipo_archivo_datos.php';
?>

