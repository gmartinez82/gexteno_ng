<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCreditoPdeTributo::setSesPag($pag);

$criterio = new Criterio(PdeNotaCreditoPdeTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCreditoPdeTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_credito_pde_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCreditoPdeTributo::getSesPagCantidad(), PdeNotaCreditoPdeTributo::getSesPag());
$pde_nota_credito_pde_tributos = PdeNotaCreditoPdeTributo::getPdeNotaCreditoPdeTributosDesdeBackend($paginador, $criterio);

include 'pde_nota_credito_pde_tributo_datos.php';
?>

