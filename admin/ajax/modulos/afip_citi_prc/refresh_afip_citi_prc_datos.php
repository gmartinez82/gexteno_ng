<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AfipCitiPrc::setSesPag($pag);

$criterio = new Criterio(AfipCitiPrc::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AfipCitiPrc::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('afip_citi_prc');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AfipCitiPrc::getSesPagCantidad(), AfipCitiPrc::getSesPag());
$afip_citi_prcs = AfipCitiPrc::getAfipCitiPrcsDesdeBackend($paginador, $criterio);

include 'afip_citi_prc_datos.php';
?>

