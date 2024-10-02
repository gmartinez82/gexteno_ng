<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeCotizacionDestinatario::setSesPag($pag);

$criterio = new Criterio(PdeCotizacionDestinatario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCotizacionDestinatario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_cotizacion_destinatario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeCotizacionDestinatario::getSesPagCantidad(), PdeCotizacionDestinatario::getSesPag());
$pde_cotizacion_destinatarios = PdeCotizacionDestinatario::getPdeCotizacionDestinatariosDesdeBackend($paginador, $criterio);

include 'pde_cotizacion_destinatario_datos.php';
?>

