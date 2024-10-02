<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCreditoTipoEstado::setSesPag($pag);

$criterio = new Criterio(PdeNotaCreditoTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCreditoTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_credito_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCreditoTipoEstado::getSesPagCantidad(), PdeNotaCreditoTipoEstado::getSesPag());
$pde_nota_credito_tipo_estados = PdeNotaCreditoTipoEstado::getPdeNotaCreditoTipoEstadosDesdeBackend($paginador, $criterio);

include 'pde_nota_credito_tipo_estado_datos.php';
?>

