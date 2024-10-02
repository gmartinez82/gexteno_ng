<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PanTipoPanol::setSesPag($pag);

$criterio = new Criterio(PanTipoPanol::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PanTipoPanol::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pan_tipo_panol');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PanTipoPanol::getSesPagCantidad(), PanTipoPanol::getSesPag());
$pan_tipo_panols = PanTipoPanol::getPanTipoPanolsDesdeBackend($paginador, $criterio);

include 'pan_tipo_panol_datos.php';
?>

