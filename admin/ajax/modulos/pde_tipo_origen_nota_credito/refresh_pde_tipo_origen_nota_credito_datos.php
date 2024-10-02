<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoOrigenNotaCredito::setSesPag($pag);

$criterio = new Criterio(PdeTipoOrigenNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoOrigenNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_origen_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoOrigenNotaCredito::getSesPagCantidad(), PdeTipoOrigenNotaCredito::getSesPag());
$pde_tipo_origen_nota_creditos = PdeTipoOrigenNotaCredito::getPdeTipoOrigenNotaCreditosDesdeBackend($paginador, $criterio);

include 'pde_tipo_origen_nota_credito_datos.php';
?>

