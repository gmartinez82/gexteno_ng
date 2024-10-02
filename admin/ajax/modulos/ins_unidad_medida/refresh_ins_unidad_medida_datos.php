<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsUnidadMedida::setSesPag($pag);

$criterio = new Criterio(InsUnidadMedida::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsUnidadMedida::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_unidad_medida');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsUnidadMedida::getSesPagCantidad(), InsUnidadMedida::getSesPag());
$ins_unidad_medidas = InsUnidadMedida::getInsUnidadMedidasDesdeBackend($paginador, $criterio);

include 'ins_unidad_medida_datos.php';
?>

