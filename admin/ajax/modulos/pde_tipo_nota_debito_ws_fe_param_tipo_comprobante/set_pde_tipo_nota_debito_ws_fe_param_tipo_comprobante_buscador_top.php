<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeTipoNotaDebitoWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeTipoNotaDebitoWsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_tipo_nota_debito_ws_fe_param_tipo_comprobante.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_tipo_nota_debito_ws_fe_param_tipo_comprobante.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_nota_debito_ws_fe_param_tipo_comprobante.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_nota_debito_ws_fe_param_tipo_comprobante.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_nota_debito_ws_fe_param_tipo_comprobante.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_nota_debito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_nota_debito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_nota_debito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_comprobante.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_comprobante.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_comprobante.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_tipo_nota_debito', 'pde_tipo_nota_debito.id', 'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante.pde_tipo_nota_debito_id', 'LEFT JOIN');
$criterio->addRealJoin('ws_fe_param_tipo_comprobante', 'ws_fe_param_tipo_comprobante.id', 'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_tipo_nota_debito_ws_fe_param_tipo_comprobante');
$criterio->setCriterios();

