<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCreditoEstado::setSesPag($pag);

$criterio = new Criterio(PdeNotaCreditoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCreditoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_credito_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCreditoEstado::getSesPagCantidad(), PdeNotaCreditoEstado::getSesPag());
$pde_nota_credito_estados = PdeNotaCreditoEstado::getPdeNotaCreditoEstadosDesdeBackend($paginador, $criterio);

include 'pde_nota_credito_estado_datos.php';
?>

