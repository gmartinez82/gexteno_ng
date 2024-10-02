<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeRecepcion::setSesPag($pag);

$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeRecepcion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recepcion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeRecepcion::getSesPagCantidad(), PdeRecepcion::getSesPag());
$pde_recepcions = PdeRecepcion::getPdeRecepcionsDesdeBackend($paginador, $criterio);

include 'pde_recepcion_datos.php';
?>

