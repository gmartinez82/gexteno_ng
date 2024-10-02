<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PanUbiCelda::setSesPag($pag);

$criterio = new Criterio(PanUbiCelda::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PanUbiCelda::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pan_ubi_celda');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PanUbiCelda::getSesPagCantidad(), PanUbiCelda::getSesPag());
$pan_ubi_celdas = PanUbiCelda::getPanUbiCeldasDesdeBackend($paginador, $criterio);

include 'pan_ubi_celda_datos.php';
?>

