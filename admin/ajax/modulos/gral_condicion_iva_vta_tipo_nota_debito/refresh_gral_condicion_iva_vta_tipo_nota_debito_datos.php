<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCondicionIvaVtaTipoNotaDebito::setSesPag($pag);

$criterio = new Criterio(GralCondicionIvaVtaTipoNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCondicionIvaVtaTipoNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_condicion_iva_vta_tipo_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCondicionIvaVtaTipoNotaDebito::getSesPagCantidad(), GralCondicionIvaVtaTipoNotaDebito::getSesPag());
$gral_condicion_iva_vta_tipo_nota_debitos = GralCondicionIvaVtaTipoNotaDebito::getGralCondicionIvaVtaTipoNotaDebitosDesdeBackend($paginador, $criterio);

include 'gral_condicion_iva_vta_tipo_nota_debito_datos.php';
?>

