<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsUsuarioAuditoria::setSesPag($pag);

$criterio = new Criterio(UsUsuarioAuditoria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsUsuarioAuditoria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_usuario_auditoria');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsUsuarioAuditoria::getSesPagCantidad(), UsUsuarioAuditoria::getSesPag());
$us_usuario_auditorias = UsUsuarioAuditoria::getUsUsuarioAuditoriasDesdeBackend($paginador, $criterio);

include 'us_usuario_auditoria_datos.php';
?>

