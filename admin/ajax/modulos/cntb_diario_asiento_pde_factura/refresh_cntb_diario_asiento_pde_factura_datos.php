<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbDiarioAsientoPdeFactura::setSesPag($pag);

$criterio = new Criterio(CntbDiarioAsientoPdeFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoPdeFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_diario_asiento_pde_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbDiarioAsientoPdeFactura::getSesPagCantidad(), CntbDiarioAsientoPdeFactura::getSesPag());
$cntb_diario_asiento_pde_facturas = CntbDiarioAsientoPdeFactura::getCntbDiarioAsientoPdeFacturasDesdeBackend($paginador, $criterio);

include 'cntb_diario_asiento_pde_factura_datos.php';
?>

