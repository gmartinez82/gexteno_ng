<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCreditoArchivo::setSesPag($pag);

$criterio = new Criterio(PdeNotaCreditoArchivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCreditoArchivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_credito_archivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCreditoArchivo::getSesPagCantidad(), PdeNotaCreditoArchivo::getSesPag());
$pde_nota_credito_archivos = PdeNotaCreditoArchivo::getPdeNotaCreditoArchivosDesdeBackend($paginador, $criterio);

include 'pde_nota_credito_archivo_datos.php';
?>

