<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdEquipo::setSesPag($pag);

$criterio = new Criterio(PrdEquipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdEquipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_equipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdEquipo::getSesPagCantidad(), PrdEquipo::getSesPag());
$prd_equipos = PrdEquipo::getPrdEquiposDesdeBackend($paginador, $criterio);

include 'prd_equipo_datos.php';
?>

