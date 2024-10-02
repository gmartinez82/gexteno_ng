<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PanUbiAltura::setSesPag($pag);

$criterio = new Criterio(PanUbiAltura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PanUbiAltura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pan_ubi_altura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PanUbiAltura::getSesPagCantidad(), PanUbiAltura::getSesPag());
$pan_ubi_alturas = PanUbiAltura::getPanUbiAlturasDesdeBackend($paginador, $criterio);

include 'pan_ubi_altura_datos.php';
?>

