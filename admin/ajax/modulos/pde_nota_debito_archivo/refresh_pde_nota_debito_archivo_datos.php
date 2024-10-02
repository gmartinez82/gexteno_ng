<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaDebitoArchivo::setSesPag($pag);

$criterio = new Criterio(PdeNotaDebitoArchivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaDebitoArchivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_debito_archivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaDebitoArchivo::getSesPagCantidad(), PdeNotaDebitoArchivo::getSesPag());
$pde_nota_debito_archivos = PdeNotaDebitoArchivo::getPdeNotaDebitoArchivosDesdeBackend($paginador, $criterio);

include 'pde_nota_debito_archivo_datos.php';
?>

