<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCajaTipo::setSesPag($pag);

$criterio = new Criterio(GralCajaTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCajaTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_caja_tipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCajaTipo::getSesPagCantidad(), GralCajaTipo::getSesPag());
$gral_caja_tipos = GralCajaTipo::getGralCajaTiposDesdeBackend($paginador, $criterio);

include 'gral_caja_tipo_datos.php';
?>

