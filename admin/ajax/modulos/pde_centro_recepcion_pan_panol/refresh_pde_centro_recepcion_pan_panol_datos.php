<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeCentroRecepcionPanPanol::setSesPag($pag);

$criterio = new Criterio(PdeCentroRecepcionPanPanol::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCentroRecepcionPanPanol::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_centro_recepcion_pan_panol');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeCentroRecepcionPanPanol::getSesPagCantidad(), PdeCentroRecepcionPanPanol::getSesPag());
$pde_centro_recepcion_pan_panols = PdeCentroRecepcionPanPanol::getPdeCentroRecepcionPanPanolsDesdeBackend($paginador, $criterio);

include 'pde_centro_recepcion_pan_panol_datos.php';
?>

