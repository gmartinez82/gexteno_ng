<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralTipoIva::setSesPag($pag);

$criterio = new Criterio(GralTipoIva::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralTipoIva::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_tipo_iva');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralTipoIva::getSesPagCantidad(), GralTipoIva::getSesPag());
$gral_tipo_ivas = GralTipoIva::getGralTipoIvasDesdeBackend($paginador, $criterio);

include 'gral_tipo_iva_datos.php';
?>

