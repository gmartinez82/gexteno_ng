<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaDebitoEnviado::setSesPag($pag);

$criterio = new Criterio(VtaNotaDebitoEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaDebitoEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_debito_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaDebitoEnviado::getSesPagCantidad(), VtaNotaDebitoEnviado::getSesPag());
$vta_nota_debito_enviados = VtaNotaDebitoEnviado::getVtaNotaDebitoEnviadosDesdeBackend($paginador, $criterio);

include 'vta_nota_debito_enviado_datos.php';
?>

