<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsTipoNecesidad::setSesPag($pag);

$criterio = new Criterio(InsTipoNecesidad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsTipoNecesidad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_tipo_necesidad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsTipoNecesidad::getSesPagCantidad(), InsTipoNecesidad::getSesPag());
$ins_tipo_necesidads = InsTipoNecesidad::getInsTipoNecesidadsDesdeBackend($paginador, $criterio);

include 'ins_tipo_necesidad_datos.php';
?>

