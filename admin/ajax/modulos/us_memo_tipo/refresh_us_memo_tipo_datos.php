<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsMemoTipo::setSesPag($pag);

$criterio = new Criterio(UsMemoTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsMemoTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_memo_tipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsMemoTipo::getSesPagCantidad(), UsMemoTipo::getSesPag());
$us_memo_tipos = UsMemoTipo::getUsMemoTiposDesdeBackend($paginador, $criterio);

include 'us_memo_tipo_datos.php';
?>

