<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCondicionIvaVtaTipoRecibo::setSesPag($pag);

$criterio = new Criterio(GralCondicionIvaVtaTipoRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCondicionIvaVtaTipoRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_condicion_iva_vta_tipo_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCondicionIvaVtaTipoRecibo::getSesPagCantidad(), GralCondicionIvaVtaTipoRecibo::getSesPag());
$gral_condicion_iva_vta_tipo_recibos = GralCondicionIvaVtaTipoRecibo::getGralCondicionIvaVtaTipoRecibosDesdeBackend($paginador, $criterio);

include 'gral_condicion_iva_vta_tipo_recibo_datos.php';
?>

