<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTributoExencion::setSesPag($pag);

$criterio = new Criterio(PdeTributoExencion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTributoExencion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tributo_exencion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTributoExencion::getSesPagCantidad(), PdeTributoExencion::getSesPag());
$pde_tributo_exencions = PdeTributoExencion::getPdeTributoExencionsDesdeBackend($paginador, $criterio);

include 'pde_tributo_exencion_datos.php';
?>

