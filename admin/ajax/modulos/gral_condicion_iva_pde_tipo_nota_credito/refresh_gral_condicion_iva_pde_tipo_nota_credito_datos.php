<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCondicionIvaPdeTipoNotaCredito::setSesPag($pag);

$criterio = new Criterio(GralCondicionIvaPdeTipoNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCondicionIvaPdeTipoNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_condicion_iva_pde_tipo_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCondicionIvaPdeTipoNotaCredito::getSesPagCantidad(), GralCondicionIvaPdeTipoNotaCredito::getSesPag());
$gral_condicion_iva_pde_tipo_nota_creditos = GralCondicionIvaPdeTipoNotaCredito::getGralCondicionIvaPdeTipoNotaCreditosDesdeBackend($paginador, $criterio);

include 'gral_condicion_iva_pde_tipo_nota_credito_datos.php';
?>

