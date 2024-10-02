<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcEstadoRecepcion::setSesPag($pag);

$criterio = new Criterio(PdeOcEstadoRecepcion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcEstadoRecepcion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_estado_recepcion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcEstadoRecepcion::getSesPagCantidad(), PdeOcEstadoRecepcion::getSesPag());
$pde_oc_estado_recepcions = PdeOcEstadoRecepcion::getPdeOcEstadoRecepcionsDesdeBackend($paginador, $criterio);

include 'pde_oc_estado_recepcion_datos.php';
?>

