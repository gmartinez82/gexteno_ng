<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeReciboEstado::setSesPag($pag);

$criterio = new Criterio(PdeReciboEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeReciboEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recibo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeReciboEstado::getSesPagCantidad(), PdeReciboEstado::getSesPag());
$pde_recibo_estados = PdeReciboEstado::getPdeReciboEstadosDesdeBackend($paginador, $criterio);

include 'pde_recibo_estado_datos.php';
?>

