<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoInsAtributo::setSesPag($pag);

$criterio = new Criterio(InsInsumoInsAtributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoInsAtributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_ins_atributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoInsAtributo::getSesPagCantidad(), InsInsumoInsAtributo::getSesPag());
$ins_insumo_ins_atributos = InsInsumoInsAtributo::getInsInsumoInsAtributosDesdeBackend($paginador, $criterio);

include 'ins_insumo_ins_atributo_datos.php';
?>

