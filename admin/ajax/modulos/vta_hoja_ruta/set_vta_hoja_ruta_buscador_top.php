<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_vta_hoja_ruta_gral_ruta_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_vta_hoja_ruta_gral_ruta_id', 0);
$buscador_top_vta_hoja_ruta_ope_chofer_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_vta_hoja_ruta_ope_chofer_id', 0);
$buscador_top_vta_hoja_ruta_vta_hoja_ruta_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_vta_hoja_ruta_vta_hoja_ruta_tipo_estado_id', 0);


$criterio = new Criterio(VtaHojaRuta::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaHojaRuta::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_vta_hoja_ruta_gral_ruta_id != 0) {
        $criterio->add('vta_hoja_ruta.gral_ruta_id', $buscador_top_vta_hoja_ruta_gral_ruta_id, Criterio::IGUAL);
    }
    if ($buscador_top_vta_hoja_ruta_ope_chofer_id != 0) {
        $criterio->add('vta_hoja_ruta.ope_chofer_id', $buscador_top_vta_hoja_ruta_ope_chofer_id, Criterio::IGUAL);
    }
    if ($buscador_top_vta_hoja_ruta_vta_hoja_ruta_tipo_estado_id != 0) {
        $criterio->add('vta_hoja_ruta.vta_hoja_ruta_tipo_estado_id', $buscador_top_vta_hoja_ruta_vta_hoja_ruta_tipo_estado_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_hoja_ruta.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_hoja_ruta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_hoja_ruta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_hoja_ruta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_hoja_ruta.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_ruta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_ruta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_ruta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_hoja_ruta_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_hoja_ruta_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_hoja_ruta_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_ruta', 'gral_ruta.id', 'vta_hoja_ruta.gral_ruta_id', 'LEFT JOIN');
$criterio->addRealJoin('ope_chofer', 'ope_chofer.id', 'vta_hoja_ruta.ope_chofer_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_hoja_ruta_tipo_estado', 'vta_hoja_ruta_tipo_estado.id', 'vta_hoja_ruta.vta_hoja_ruta_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_hoja_ruta');
$criterio->setCriterios();

