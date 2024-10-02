<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCreditoPdeFacturaPdeOc::setSesPag($pag);

$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeOc::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCreditoPdeFacturaPdeOc::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_credito_pde_factura_pde_oc');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCreditoPdeFacturaPdeOc::getSesPagCantidad(), PdeNotaCreditoPdeFacturaPdeOc::getSesPag());
$pde_nota_credito_pde_factura_pde_ocs = PdeNotaCreditoPdeFacturaPdeOc::getPdeNotaCreditoPdeFacturaPdeOcsDesdeBackend($paginador, $criterio);

include 'pde_nota_credito_pde_factura_pde_oc_datos.php';
?>

