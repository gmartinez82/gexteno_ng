<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralEmpresa::setSesPag($pag);

$criterio = new Criterio(GralEmpresa::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralEmpresa::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_empresa');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralEmpresa::getSesPagCantidad(), GralEmpresa::getSesPag());
$gral_empresas = GralEmpresa::getGralEmpresasDesdeBackend($paginador, $criterio);

include 'gral_empresa_datos.php';
?>

