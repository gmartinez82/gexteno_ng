<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AfipCitiVentasCbte::setSesPag($pag);

$criterio = new Criterio(AfipCitiVentasCbte::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AfipCitiVentasCbte::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('afip_citi_ventas_cbte');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AfipCitiVentasCbte::getSesPagCantidad(), AfipCitiVentasCbte::getSesPag());
$afip_citi_ventas_cbtes = AfipCitiVentasCbte::getAfipCitiVentasCbtesDesdeBackend($paginador, $criterio);

include 'afip_citi_ventas_cbte_datos.php';
?>

