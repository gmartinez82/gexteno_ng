<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoEstado::setSesPag($pag);

$criterio = new Criterio(PdeTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoEstado::getSesPagCantidad(), PdeTipoEstado::getSesPag());
$pde_tipo_estados = PdeTipoEstado::getPdeTipoEstadosDesdeBackend($paginador, $criterio);

include 'pde_tipo_estado_datos.php';
?>

