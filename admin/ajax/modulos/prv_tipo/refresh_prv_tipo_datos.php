<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvTipo::setSesPag($pag);

$criterio = new Criterio(PrvTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_tipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvTipo::getSesPagCantidad(), PrvTipo::getSesPag());
$prv_tipos = PrvTipo::getPrvTiposDesdeBackend($paginador, $criterio);

include 'prv_tipo_datos.php';
?>

