<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoContribuyenteGralTipoPersoneria::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoContribuyenteGralTipoPersoneria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoContribuyenteGralTipoPersoneria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_contribuyente_gral_tipo_personeria');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoContribuyenteGralTipoPersoneria::getSesPagCantidad(), EkuParamTipoContribuyenteGralTipoPersoneria::getSesPag());
$eku_param_tipo_contribuyente_gral_tipo_personerias = EkuParamTipoContribuyenteGralTipoPersoneria::getEkuParamTipoContribuyenteGralTipoPersoneriasDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_contribuyente_gral_tipo_personeria_datos.php';
?>

