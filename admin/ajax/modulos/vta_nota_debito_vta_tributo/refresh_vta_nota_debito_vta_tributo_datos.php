<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaDebitoVtaTributo::setSesPag($pag);

$criterio = new Criterio(VtaNotaDebitoVtaTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaDebitoVtaTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_debito_vta_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaDebitoVtaTributo::getSesPagCantidad(), VtaNotaDebitoVtaTributo::getSesPag());
$vta_nota_debito_vta_tributos = VtaNotaDebitoVtaTributo::getVtaNotaDebitoVtaTributosDesdeBackend($paginador, $criterio);

include 'vta_nota_debito_vta_tributo_datos.php';
?>

