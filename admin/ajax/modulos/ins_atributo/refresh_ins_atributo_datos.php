<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsAtributo::setSesPag($pag);

$criterio = new Criterio(InsAtributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsAtributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_atributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsAtributo::getSesPagCantidad(), InsAtributo::getSesPag());
$ins_atributos = InsAtributo::getInsAtributosDesdeBackend($paginador, $criterio);

include 'ins_atributo_datos.php';
?>

