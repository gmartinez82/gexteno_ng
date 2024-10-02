<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_vta_vendedor_gral_sucursal_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_vta_vendedor_gral_sucursal_id', 0);
$buscador_top_vta_vendedor_vta_tipo_vendedor_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_vta_vendedor_vta_tipo_vendedor_id', 0);


$criterio = new Criterio(VtaVendedor::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaVendedor::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_vta_vendedor_gral_sucursal_id != 0) {
        $criterio->add('vta_vendedor.gral_sucursal_id', $buscador_top_vta_vendedor_gral_sucursal_id, Criterio::IGUAL);
    }
    if ($buscador_top_vta_vendedor_vta_tipo_vendedor_id != 0) {
        $criterio->add('vta_vendedor.vta_tipo_vendedor_id', $buscador_top_vta_vendedor_vta_tipo_vendedor_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_vendedor.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_vendedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.celular', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.porcentaje_comision', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_vendedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_vendedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_vendedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_vendedor.gral_sucursal_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_tipo_vendedor', 'vta_tipo_vendedor.id', 'vta_vendedor.vta_tipo_vendedor_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_vendedor');
$criterio->setCriterios();

