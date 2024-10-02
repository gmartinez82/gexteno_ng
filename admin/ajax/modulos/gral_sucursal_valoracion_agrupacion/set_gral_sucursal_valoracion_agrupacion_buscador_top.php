<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_gral_sucursal_valoracion_agrupacion_gral_sucursal_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_gral_sucursal_valoracion_agrupacion_gral_sucursal_id', 0);


$criterio = new Criterio(GralSucursalValoracionAgrupacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
GralSucursalValoracionAgrupacion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_gral_sucursal_valoracion_agrupacion_gral_sucursal_id != 0) {
        $criterio->add('gral_sucursal_valoracion_agrupacion.gral_sucursal_id', $buscador_top_gral_sucursal_valoracion_agrupacion_gral_sucursal_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('gral_sucursal_valoracion_agrupacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_sucursal_valoracion_agrupacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.valoracion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.session', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.navegador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.ip', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_valoracion_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_valoracion_agrupacion.gral_sucursal_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'gral_sucursal_valoracion_agrupacion.cli_cliente_id', 'LEFT JOIN');
    
$criterio->addTabla('gral_sucursal_valoracion_agrupacion');
$criterio->setCriterios();

