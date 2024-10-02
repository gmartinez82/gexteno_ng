<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaDebitoEstado::setSesPag($pag);

$criterio = new Criterio(PdeNotaDebitoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaDebitoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_debito_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaDebitoEstado::getSesPagCantidad(), PdeNotaDebitoEstado::getSesPag());
$pde_nota_debito_estados = PdeNotaDebitoEstado::getPdeNotaDebitoEstadosDesdeBackend($paginador, $criterio);

include 'pde_nota_debito_estado_datos.php';
?>

