<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralTipoPersoneria::setSesPag($pag);

$criterio = new Criterio(GralTipoPersoneria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralTipoPersoneria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_tipo_personeria');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralTipoPersoneria::getSesPagCantidad(), GralTipoPersoneria::getSesPag());
$gral_tipo_personerias = GralTipoPersoneria::getGralTipoPersoneriasDesdeBackend($paginador, $criterio);

include 'gral_tipo_personeria_datos.php';
?>

