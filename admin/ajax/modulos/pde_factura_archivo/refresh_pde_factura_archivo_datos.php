<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaArchivo::setSesPag($pag);

$criterio = new Criterio(PdeFacturaArchivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaArchivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_archivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaArchivo::getSesPagCantidad(), PdeFacturaArchivo::getSesPag());
$pde_factura_archivos = PdeFacturaArchivo::getPdeFacturaArchivosDesdeBackend($paginador, $criterio);

include 'pde_factura_archivo_datos.php';
?>

