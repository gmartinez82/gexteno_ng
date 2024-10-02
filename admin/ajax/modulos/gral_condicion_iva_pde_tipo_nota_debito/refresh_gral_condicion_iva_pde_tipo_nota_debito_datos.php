<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCondicionIvaPdeTipoNotaDebito::setSesPag($pag);

$criterio = new Criterio(GralCondicionIvaPdeTipoNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCondicionIvaPdeTipoNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_condicion_iva_pde_tipo_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCondicionIvaPdeTipoNotaDebito::getSesPagCantidad(), GralCondicionIvaPdeTipoNotaDebito::getSesPag());
$gral_condicion_iva_pde_tipo_nota_debitos = GralCondicionIvaPdeTipoNotaDebito::getGralCondicionIvaPdeTipoNotaDebitosDesdeBackend($paginador, $criterio);

include 'gral_condicion_iva_pde_tipo_nota_debito_datos.php';
?>

