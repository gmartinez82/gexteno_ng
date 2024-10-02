<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerPersonaGralSucursal::setSesPag($pag);

$criterio = new Criterio(PerPersonaGralSucursal::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerPersonaGralSucursal::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_persona_gral_sucursal');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerPersonaGralSucursal::getSesPagCantidad(), PerPersonaGralSucursal::getSesPag());
$per_persona_gral_sucursals = PerPersonaGralSucursal::getPerPersonaGralSucursalsDesdeBackend($paginador, $criterio);

include 'per_persona_gral_sucursal_datos.php';
?>

