<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OpeChoferUsUsuario::setSesPag($pag);

$criterio = new Criterio(OpeChoferUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OpeChoferUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ope_chofer_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OpeChoferUsUsuario::getSesPagCantidad(), OpeChoferUsUsuario::getSesPag());
$ope_chofer_us_usuarios = OpeChoferUsUsuario::getOpeChoferUsUsuariosDesdeBackend($paginador, $criterio);

include 'ope_chofer_us_usuario_datos.php';
?>

