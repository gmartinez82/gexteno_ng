<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTributoExencion::setSesPag($pag);

$criterio = new Criterio(VtaTributoExencion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTributoExencion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tributo_exencion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTributoExencion::getSesPagCantidad(), VtaTributoExencion::getSesPag());
$vta_tributo_exencions = VtaTributoExencion::getVtaTributoExencionsDesdeBackend($paginador, $criterio);

include 'vta_tributo_exencion_datos.php';
?>

