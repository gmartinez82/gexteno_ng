<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcTipoEstado::setSesPag($pag);

$criterio = new Criterio(PdeOcTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcTipoEstado::getSesPagCantidad(), PdeOcTipoEstado::getSesPag());
$pde_oc_tipo_estados = PdeOcTipoEstado::getPdeOcTipoEstadosDesdeBackend($paginador, $criterio);

include 'pde_oc_tipo_estado_datos.php';
?>

