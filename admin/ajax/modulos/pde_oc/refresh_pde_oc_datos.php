<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOc::setSesPag($pag);

$criterio = new Criterio(PdeOc::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOc::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOc::getSesPagCantidad(), PdeOc::getSesPag());
$pde_ocs = PdeOc::getPdeOcsDesdeBackend($paginador, $criterio);

include 'pde_oc_datos.php';
?>

