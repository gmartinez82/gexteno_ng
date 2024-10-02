<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaPdeOc::setSesPag($pag);

$criterio = new Criterio(PdeFacturaPdeOc::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaPdeOc::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_pde_oc');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaPdeOc::getSesPagCantidad(), PdeFacturaPdeOc::getSesPag());
$pde_factura_pde_ocs = PdeFacturaPdeOc::getPdeFacturaPdeOcsDesdeBackend($paginador, $criterio);

include 'pde_factura_pde_oc_datos.php';
?>

