<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoNaturalezaTransportista::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoNaturalezaTransportista::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoNaturalezaTransportista::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_naturaleza_transportista');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoNaturalezaTransportista::getSesPagCantidad(), EkuParamTipoNaturalezaTransportista::getSesPag());
$eku_param_tipo_naturaleza_transportistas = EkuParamTipoNaturalezaTransportista::getEkuParamTipoNaturalezaTransportistasDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_naturaleza_transportista_datos.php';
?>

