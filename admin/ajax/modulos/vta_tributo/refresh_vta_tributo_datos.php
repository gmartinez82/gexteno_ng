<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTributo::setSesPag($pag);

$criterio = new Criterio(VtaTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTributo::getSesPagCantidad(), VtaTributo::getSesPag());
$vta_tributos = VtaTributo::getVtaTributosDesdeBackend($paginador, $criterio);

include 'vta_tributo_datos.php';
?>

