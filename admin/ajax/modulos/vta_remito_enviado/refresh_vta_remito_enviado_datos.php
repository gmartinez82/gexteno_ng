<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaRemitoEnviado::setSesPag($pag);

$criterio = new Criterio(VtaRemitoEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaRemitoEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_remito_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaRemitoEnviado::getSesPagCantidad(), VtaRemitoEnviado::getSesPag());
$vta_remito_enviados = VtaRemitoEnviado::getVtaRemitoEnviadosDesdeBackend($paginador, $criterio);

include 'vta_remito_enviado_datos.php';
?>

