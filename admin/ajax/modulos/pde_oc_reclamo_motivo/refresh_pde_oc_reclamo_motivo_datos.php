<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcReclamoMotivo::setSesPag($pag);

$criterio = new Criterio(PdeOcReclamoMotivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcReclamoMotivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_reclamo_motivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcReclamoMotivo::getSesPagCantidad(), PdeOcReclamoMotivo::getSesPag());
$pde_oc_reclamo_motivos = PdeOcReclamoMotivo::getPdeOcReclamoMotivosDesdeBackend($paginador, $criterio);

include 'pde_oc_reclamo_motivo_datos.php';
?>

