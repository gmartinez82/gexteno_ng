<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsTipoInsumo::setSesPag($pag);

$criterio = new Criterio(InsTipoInsumo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsTipoInsumo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_tipo_insumo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsTipoInsumo::getSesPagCantidad(), InsTipoInsumo::getSesPag());
$ins_tipo_insumos = InsTipoInsumo::getInsTipoInsumosDesdeBackend($paginador, $criterio);

include 'ins_tipo_insumo_datos.php';
?>

