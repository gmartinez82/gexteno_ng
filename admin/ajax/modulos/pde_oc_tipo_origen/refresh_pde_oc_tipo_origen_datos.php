<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcTipoOrigen::setSesPag($pag);

$criterio = new Criterio(PdeOcTipoOrigen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcTipoOrigen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_tipo_origen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcTipoOrigen::getSesPagCantidad(), PdeOcTipoOrigen::getSesPag());
$pde_oc_tipo_origens = PdeOcTipoOrigen::getPdeOcTipoOrigensDesdeBackend($paginador, $criterio);

include 'pde_oc_tipo_origen_datos.php';
?>

