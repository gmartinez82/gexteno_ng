<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcAgrupacionEnviado::setSesPag($pag);

$criterio = new Criterio(PdeOcAgrupacionEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcAgrupacionEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_agrupacion_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcAgrupacionEnviado::getSesPagCantidad(), PdeOcAgrupacionEnviado::getSesPag());
$pde_oc_agrupacion_enviados = PdeOcAgrupacionEnviado::getPdeOcAgrupacionEnviadosDesdeBackend($paginador, $criterio);

include 'pde_oc_agrupacion_enviado_datos.php';
?>

