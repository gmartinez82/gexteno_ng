<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AfipCitiCabecera::setSesPag($pag);

$criterio = new Criterio(AfipCitiCabecera::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AfipCitiCabecera::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('afip_citi_cabecera');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AfipCitiCabecera::getSesPagCantidad(), AfipCitiCabecera::getSesPag());
$afip_citi_cabeceras = AfipCitiCabecera::getAfipCitiCabecerasDesdeBackend($paginador, $criterio);

include 'afip_citi_cabecera_datos.php';
?>

