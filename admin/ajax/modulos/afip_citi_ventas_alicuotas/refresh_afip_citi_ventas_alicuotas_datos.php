<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AfipCitiVentasAlicuotas::setSesPag($pag);

$criterio = new Criterio(AfipCitiVentasAlicuotas::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AfipCitiVentasAlicuotas::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('afip_citi_ventas_alicuotas');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AfipCitiVentasAlicuotas::getSesPagCantidad(), AfipCitiVentasAlicuotas::getSesPag());
$afip_citi_ventas_alicuotass = AfipCitiVentasAlicuotas::getAfipCitiVentasAlicuotassDesdeBackend($paginador, $criterio);

include 'afip_citi_ventas_alicuotas_datos.php';
?>

