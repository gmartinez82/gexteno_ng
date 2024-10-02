<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsMatriz::setSesPag($pag);

$criterio = new Criterio(InsMatriz::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsMatriz::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_matriz');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsMatriz::getSesPagCantidad(), InsMatriz::getSesPag());
$ins_matrizs = InsMatriz::getInsMatrizsDesdeBackend($paginador, $criterio);

include 'ins_matriz_datos.php';
?>

