<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeReciboArchivo::setSesPag($pag);

$criterio = new Criterio(PdeReciboArchivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeReciboArchivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recibo_archivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeReciboArchivo::getSesPagCantidad(), PdeReciboArchivo::getSesPag());
$pde_recibo_archivos = PdeReciboArchivo::getPdeReciboArchivosDesdeBackend($paginador, $criterio);

include 'pde_recibo_archivo_datos.php';
?>

