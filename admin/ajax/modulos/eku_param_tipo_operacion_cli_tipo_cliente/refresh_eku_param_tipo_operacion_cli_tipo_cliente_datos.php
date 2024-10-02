<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoOperacionCliTipoCliente::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoOperacionCliTipoCliente::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoOperacionCliTipoCliente::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_operacion_cli_tipo_cliente');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoOperacionCliTipoCliente::getSesPagCantidad(), EkuParamTipoOperacionCliTipoCliente::getSesPag());
$eku_param_tipo_operacion_cli_tipo_clientes = EkuParamTipoOperacionCliTipoCliente::getEkuParamTipoOperacionCliTipoClientesDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_operacion_cli_tipo_cliente_datos.php';
?>

