<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaDebitoTipoEstado::setSesPag($pag);

$criterio = new Criterio(PdeNotaDebitoTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaDebitoTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_debito_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaDebitoTipoEstado::getSesPagCantidad(), PdeNotaDebitoTipoEstado::getSesPag());
$pde_nota_debito_tipo_estados = PdeNotaDebitoTipoEstado::getPdeNotaDebitoTipoEstadosDesdeBackend($paginador, $criterio);

include 'pde_nota_debito_tipo_estado_datos.php';
?>

