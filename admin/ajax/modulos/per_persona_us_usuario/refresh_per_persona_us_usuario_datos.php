<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerPersonaUsUsuario::setSesPag($pag);

$criterio = new Criterio(PerPersonaUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerPersonaUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_persona_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerPersonaUsUsuario::getSesPagCantidad(), PerPersonaUsUsuario::getSesPag());
$per_persona_us_usuarios = PerPersonaUsUsuario::getPerPersonaUsUsuariosDesdeBackend($paginador, $criterio);

include 'per_persona_us_usuario_datos.php';
?>

