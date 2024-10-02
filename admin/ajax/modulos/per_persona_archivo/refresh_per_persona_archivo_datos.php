<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerPersonaArchivo::setSesPag($pag);

$criterio = new Criterio(PerPersonaArchivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerPersonaArchivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_persona_archivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerPersonaArchivo::getSesPagCantidad(), PerPersonaArchivo::getSesPag());
$per_persona_archivos = PerPersonaArchivo::getPerPersonaArchivosDesdeBackend($paginador, $criterio);

include 'per_persona_archivo_datos.php';
?>

