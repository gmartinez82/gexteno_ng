<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboEnviado::setSesPag($pag);

$criterio = new Criterio(VtaReciboEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboEnviado::getSesPagCantidad(), VtaReciboEnviado::getSesPag());
$vta_recibo_enviados = VtaReciboEnviado::getVtaReciboEnviadosDesdeBackend($paginador, $criterio);

include 'vta_recibo_enviado_datos.php';
?>

