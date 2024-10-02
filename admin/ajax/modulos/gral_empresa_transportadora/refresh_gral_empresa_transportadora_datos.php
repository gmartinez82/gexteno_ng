<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralEmpresaTransportadora::setSesPag($pag);

$criterio = new Criterio(GralEmpresaTransportadora::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralEmpresaTransportadora::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_empresa_transportadora');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralEmpresaTransportadora::getSesPagCantidad(), GralEmpresaTransportadora::getSesPag());
$gral_empresa_transportadoras = GralEmpresaTransportadora::getGralEmpresaTransportadorasDesdeBackend($paginador, $criterio);

include 'gral_empresa_transportadora_datos.php';
?>

