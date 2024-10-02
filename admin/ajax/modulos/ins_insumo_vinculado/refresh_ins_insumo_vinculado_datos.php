<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoVinculado::setSesPag($pag);

$criterio = new Criterio(InsInsumoVinculado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoVinculado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_vinculado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoVinculado::getSesPagCantidad(), InsInsumoVinculado::getSesPag());
$ins_insumo_vinculados = InsInsumoVinculado::getInsInsumoVinculadosDesdeBackend($paginador, $criterio);

include 'ins_insumo_vinculado_datos.php';
?>

