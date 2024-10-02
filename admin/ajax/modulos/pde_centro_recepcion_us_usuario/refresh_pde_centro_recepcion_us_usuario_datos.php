<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeCentroRecepcionUsUsuario::setSesPag($pag);

$criterio = new Criterio(PdeCentroRecepcionUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCentroRecepcionUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_centro_recepcion_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeCentroRecepcionUsUsuario::getSesPagCantidad(), PdeCentroRecepcionUsUsuario::getSesPag());
$pde_centro_recepcion_us_usuarios = PdeCentroRecepcionUsUsuario::getPdeCentroRecepcionUsUsuariosDesdeBackend($paginador, $criterio);

include 'pde_centro_recepcion_us_usuario_datos.php';
?>

