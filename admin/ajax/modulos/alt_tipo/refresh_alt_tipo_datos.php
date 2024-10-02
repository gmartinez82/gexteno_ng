<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AltTipo::setSesPag($pag);

$criterio = new Criterio(AltTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('alt_tipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AltTipo::getSesPagCantidad(), AltTipo::getSesPag());
$alt_tipos = AltTipo::getAltTiposDesdeBackend($paginador, $criterio);

include 'alt_tipo_datos.php';
?>

