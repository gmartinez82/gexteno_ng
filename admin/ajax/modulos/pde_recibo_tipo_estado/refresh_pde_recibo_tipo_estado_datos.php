<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeReciboTipoEstado::setSesPag($pag);

$criterio = new Criterio(PdeReciboTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeReciboTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recibo_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeReciboTipoEstado::getSesPagCantidad(), PdeReciboTipoEstado::getSesPag());
$pde_recibo_tipo_estados = PdeReciboTipoEstado::getPdeReciboTipoEstadosDesdeBackend($paginador, $criterio);

include 'pde_recibo_tipo_estado_datos.php';
?>

