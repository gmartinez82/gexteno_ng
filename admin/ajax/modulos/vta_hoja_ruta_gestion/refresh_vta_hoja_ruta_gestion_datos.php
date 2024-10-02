<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaHojaRuta::setSesPag($pag);

$criterio = new Criterio(VtaHojaRuta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaHojaRuta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_hoja_ruta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaHojaRuta::getSesPagCantidad(), VtaHojaRuta::getSesPag());
$vta_hoja_rutas = VtaHojaRuta::getVtaHojaRutasDesdeBackend($paginador, $criterio);

include 'vta_hoja_ruta_gestion_datos.php';
?>

