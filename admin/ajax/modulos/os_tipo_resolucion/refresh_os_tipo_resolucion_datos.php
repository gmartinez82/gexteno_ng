<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OsTipoResolucion::setSesPag($pag);

$criterio = new Criterio(OsTipoResolucion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OsTipoResolucion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('os_tipo_resolucion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OsTipoResolucion::getSesPagCantidad(), OsTipoResolucion::getSesPag());
$os_tipo_resolucions = OsTipoResolucion::getOsTipoResolucionsDesdeBackend($paginador, $criterio);

include 'os_tipo_resolucion_datos.php';
?>

