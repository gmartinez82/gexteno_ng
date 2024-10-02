<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralNovedadMotivoExtendido::setSesPag($pag);

$criterio = new Criterio(GralNovedadMotivoExtendido::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralNovedadMotivoExtendido::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_novedad_motivo_extendido');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralNovedadMotivoExtendido::getSesPagCantidad(), GralNovedadMotivoExtendido::getSesPag());
$gral_novedad_motivo_extendidos = GralNovedadMotivoExtendido::getGralNovedadMotivoExtendidosDesdeBackend($paginador, $criterio);

include 'gral_novedad_motivo_extendido_datos.php';
?>

