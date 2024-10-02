<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoNotaCredito::setSesPag($pag);

$criterio = new Criterio(VtaTipoNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoNotaCredito::getSesPagCantidad(), VtaTipoNotaCredito::getSesPag());
$vta_tipo_nota_creditos = VtaTipoNotaCredito::getVtaTipoNotaCreditosDesdeBackend($paginador, $criterio);

include 'vta_tipo_nota_credito_datos.php';
?>

