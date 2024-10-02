<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCondicionIvaVtaTipoNotaCredito::setSesPag($pag);

$criterio = new Criterio(GralCondicionIvaVtaTipoNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCondicionIvaVtaTipoNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_condicion_iva_vta_tipo_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCondicionIvaVtaTipoNotaCredito::getSesPagCantidad(), GralCondicionIvaVtaTipoNotaCredito::getSesPag());
$gral_condicion_iva_vta_tipo_nota_creditos = GralCondicionIvaVtaTipoNotaCredito::getGralCondicionIvaVtaTipoNotaCreditosDesdeBackend($paginador, $criterio);

include 'gral_condicion_iva_vta_tipo_nota_credito_datos.php';
?>

