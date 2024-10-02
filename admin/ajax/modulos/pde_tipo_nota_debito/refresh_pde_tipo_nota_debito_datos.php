<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoNotaDebito::setSesPag($pag);

$criterio = new Criterio(PdeTipoNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoNotaDebito::getSesPagCantidad(), PdeTipoNotaDebito::getSesPag());
$pde_tipo_nota_debitos = PdeTipoNotaDebito::getPdeTipoNotaDebitosDesdeBackend($paginador, $criterio);

include 'pde_tipo_nota_debito_datos.php';
?>

