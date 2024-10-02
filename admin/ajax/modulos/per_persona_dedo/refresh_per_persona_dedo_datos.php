<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerPersonaDedo::setSesPag($pag);

$criterio = new Criterio(PerPersonaDedo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerPersonaDedo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_persona_dedo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerPersonaDedo::getSesPagCantidad(), PerPersonaDedo::getSesPag());
$per_persona_dedos = PerPersonaDedo::getPerPersonaDedosDesdeBackend($paginador, $criterio);

include 'per_persona_dedo_datos.php';
?>

