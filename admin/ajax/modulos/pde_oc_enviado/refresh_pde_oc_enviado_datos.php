<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcEnviado::setSesPag($pag);

$criterio = new Criterio(PdeOcEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcEnviado::getSesPagCantidad(), PdeOcEnviado::getSesPag());
$pde_oc_enviados = PdeOcEnviado::getPdeOcEnviadosDesdeBackend($paginador, $criterio);

include 'pde_oc_enviado_datos.php';
?>

