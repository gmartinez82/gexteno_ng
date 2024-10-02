<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PanUbiCasillero::setSesPag($pag);

$criterio = new Criterio(PanUbiCasillero::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PanUbiCasillero::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pan_ubi_casillero');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PanUbiCasillero::getSesPagCantidad(), PanUbiCasillero::getSesPag());
$pan_ubi_casilleros = PanUbiCasillero::getPanUbiCasillerosDesdeBackend($paginador, $criterio);

include 'pan_ubi_casillero_datos.php';
?>

