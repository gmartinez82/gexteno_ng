<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenApiToken::setSesPag($pag);

$criterio = new Criterio(GenApiToken::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenApiToken::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_api_token');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenApiToken::getSesPagCantidad(), GenApiToken::getSesPag());
$gen_api_tokens = GenApiToken::getGenApiTokensDesdeBackend($paginador, $criterio);

include 'gen_api_token_datos.php';
?>

