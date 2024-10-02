<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerPersona::setSesPag($pag);

$criterio = new Criterio(PerPersona::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerPersona::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_persona');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerPersona::getSesPagCantidad(), PerPersona::getSesPag());
$per_personas = PerPersona::getPerPersonasDesdeBackend($paginador, $criterio);

include 'per_persona_datos.php';
?>

