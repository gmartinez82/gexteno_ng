<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeReciboPdeTributo::setSesPag($pag);

$criterio = new Criterio(PdeReciboPdeTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeReciboPdeTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recibo_pde_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeReciboPdeTributo::getSesPagCantidad(), PdeReciboPdeTributo::getSesPag());
$pde_recibo_pde_tributos = PdeReciboPdeTributo::getPdeReciboPdeTributosDesdeBackend($paginador, $criterio);

include 'pde_recibo_pde_tributo_datos.php';
?>

