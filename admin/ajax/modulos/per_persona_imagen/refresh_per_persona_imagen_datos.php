<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerPersonaImagen::setSesPag($pag);

$criterio = new Criterio(PerPersonaImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerPersonaImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_persona_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerPersonaImagen::getSesPagCantidad(), PerPersonaImagen::getSesPag());
$per_persona_imagens = PerPersonaImagen::getPerPersonaImagensDesdeBackend($paginador, $criterio);

include 'per_persona_imagen_datos.php';
?>

