<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AfipCitiComprasCbte::setSesPag($pag);

$criterio = new Criterio(AfipCitiComprasCbte::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AfipCitiComprasCbte::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('afip_citi_compras_cbte');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AfipCitiComprasCbte::getSesPagCantidad(), AfipCitiComprasCbte::getSesPag());
$afip_citi_compras_cbtes = AfipCitiComprasCbte::getAfipCitiComprasCbtesDesdeBackend($paginador, $criterio);

include 'afip_citi_compras_cbte_datos.php';
?>

