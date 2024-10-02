<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaVendedorGralEscenario::setSesPag($pag);

$criterio = new Criterio(VtaVendedorGralEscenario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaVendedorGralEscenario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_vendedor_gral_escenario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaVendedorGralEscenario::getSesPagCantidad(), VtaVendedorGralEscenario::getSesPag());
$vta_vendedor_gral_escenarios = VtaVendedorGralEscenario::getVtaVendedorGralEscenariosDesdeBackend($paginador, $criterio);

include 'vta_vendedor_gral_escenario_datos.php';
?>

