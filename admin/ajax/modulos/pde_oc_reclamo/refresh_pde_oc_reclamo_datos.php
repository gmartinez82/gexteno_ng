<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcReclamo::setSesPag($pag);

$criterio = new Criterio(PdeOcReclamo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcReclamo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_reclamo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcReclamo::getSesPagCantidad(), PdeOcReclamo::getSesPag());
$pde_oc_reclamos = PdeOcReclamo::getPdeOcReclamosDesdeBackend($paginador, $criterio);

include 'pde_oc_reclamo_datos.php';
?>

