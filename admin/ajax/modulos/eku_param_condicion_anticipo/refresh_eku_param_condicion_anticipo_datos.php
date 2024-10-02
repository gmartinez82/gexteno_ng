<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamCondicionAnticipo::setSesPag($pag);

$criterio = new Criterio(EkuParamCondicionAnticipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamCondicionAnticipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_condicion_anticipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamCondicionAnticipo::getSesPagCantidad(), EkuParamCondicionAnticipo::getSesPag());
$eku_param_condicion_anticipos = EkuParamCondicionAnticipo::getEkuParamCondicionAnticiposDesdeBackend($paginador, $criterio);

include 'eku_param_condicion_anticipo_datos.php';
?>

