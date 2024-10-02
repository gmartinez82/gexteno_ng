<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoOrigenNotaDebito::setSesPag($pag);

$criterio = new Criterio(PdeTipoOrigenNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoOrigenNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_origen_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoOrigenNotaDebito::getSesPagCantidad(), PdeTipoOrigenNotaDebito::getSesPag());
$pde_tipo_origen_nota_debitos = PdeTipoOrigenNotaDebito::getPdeTipoOrigenNotaDebitosDesdeBackend($paginador, $criterio);

include 'pde_tipo_origen_nota_debito_datos.php';
?>

