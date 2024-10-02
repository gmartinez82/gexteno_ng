<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsUsuarioDato::setSesPag($pag);

$criterio = new Criterio(UsUsuarioDato::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsUsuarioDato::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_usuario_dato');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsUsuarioDato::getSesPagCantidad(), UsUsuarioDato::getSesPag());
$us_usuario_datos = UsUsuarioDato::getUsUsuarioDatosDesdeBackend($paginador, $criterio);

include 'us_usuario_dato_datos.php';
?>

