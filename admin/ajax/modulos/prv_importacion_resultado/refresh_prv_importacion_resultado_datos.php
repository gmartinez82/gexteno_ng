<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvImportacionResultado::setSesPag($pag);

$criterio = new Criterio(PrvImportacionResultado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvImportacionResultado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_importacion_resultado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvImportacionResultado::getSesPagCantidad(), PrvImportacionResultado::getSesPag());
$prv_importacion_resultados = PrvImportacionResultado::getPrvImportacionResultadosDesdeBackend($paginador, $criterio);

include 'prv_importacion_resultado_datos.php';
?>

