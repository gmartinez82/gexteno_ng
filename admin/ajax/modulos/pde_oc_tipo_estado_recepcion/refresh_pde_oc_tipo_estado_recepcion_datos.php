<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcTipoEstadoRecepcion::setSesPag($pag);

$criterio = new Criterio(PdeOcTipoEstadoRecepcion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcTipoEstadoRecepcion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_tipo_estado_recepcion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcTipoEstadoRecepcion::getSesPagCantidad(), PdeOcTipoEstadoRecepcion::getSesPag());
$pde_oc_tipo_estado_recepcions = PdeOcTipoEstadoRecepcion::getPdeOcTipoEstadoRecepcionsDesdeBackend($paginador, $criterio);

include 'pde_oc_tipo_estado_recepcion_datos.php';
?>

