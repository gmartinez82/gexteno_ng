<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaComisionEnviado::setSesPag($pag);

$criterio = new Criterio(VtaComisionEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaComisionEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_comision_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaComisionEnviado::getSesPagCantidad(), VtaComisionEnviado::getSesPag());
$vta_comision_enviados = VtaComisionEnviado::getVtaComisionEnviadosDesdeBackend($paginador, $criterio);

include 'vta_comision_enviado_datos.php';
?>

