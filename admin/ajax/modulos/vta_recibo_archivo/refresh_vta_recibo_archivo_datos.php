<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboArchivo::setSesPag($pag);

$criterio = new Criterio(VtaReciboArchivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboArchivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_archivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboArchivo::getSesPagCantidad(), VtaReciboArchivo::getSesPag());
$vta_recibo_archivos = VtaReciboArchivo::getVtaReciboArchivosDesdeBackend($paginador, $criterio);

include 'vta_recibo_archivo_datos.php';
?>

