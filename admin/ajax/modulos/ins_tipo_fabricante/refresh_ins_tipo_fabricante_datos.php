<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsTipoFabricante::setSesPag($pag);

$criterio = new Criterio(InsTipoFabricante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsTipoFabricante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_tipo_fabricante');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsTipoFabricante::getSesPagCantidad(), InsTipoFabricante::getSesPag());
$ins_tipo_fabricantes = InsTipoFabricante::getInsTipoFabricantesDesdeBackend($paginador, $criterio);

include 'ins_tipo_fabricante_datos.php';
?>

