<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AfipCitiComprasAlicuotas::setSesPag($pag);

$criterio = new Criterio(AfipCitiComprasAlicuotas::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AfipCitiComprasAlicuotas::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('afip_citi_compras_alicuotas');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AfipCitiComprasAlicuotas::getSesPagCantidad(), AfipCitiComprasAlicuotas::getSesPag());
$afip_citi_compras_alicuotass = AfipCitiComprasAlicuotas::getAfipCitiComprasAlicuotassDesdeBackend($paginador, $criterio);

include 'afip_citi_compras_alicuotas_datos.php';
?>

