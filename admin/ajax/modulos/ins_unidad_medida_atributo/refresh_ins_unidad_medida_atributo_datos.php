<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsUnidadMedidaAtributo::setSesPag($pag);

$criterio = new Criterio(InsUnidadMedidaAtributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsUnidadMedidaAtributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_unidad_medida_atributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsUnidadMedidaAtributo::getSesPagCantidad(), InsUnidadMedidaAtributo::getSesPag());
$ins_unidad_medida_atributos = InsUnidadMedidaAtributo::getInsUnidadMedidaAtributosDesdeBackend($paginador, $criterio);

include 'ins_unidad_medida_atributo_datos.php';
?>

