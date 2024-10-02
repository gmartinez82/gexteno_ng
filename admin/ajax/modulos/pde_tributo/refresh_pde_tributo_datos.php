<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTributo::setSesPag($pag);

$criterio = new Criterio(PdeTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTributo::getSesPagCantidad(), PdeTributo::getSesPag());
$pde_tributos = PdeTributo::getPdeTributosDesdeBackend($paginador, $criterio);

include 'pde_tributo_datos.php';
?>

