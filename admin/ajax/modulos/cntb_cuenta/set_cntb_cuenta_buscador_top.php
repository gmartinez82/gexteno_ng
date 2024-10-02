<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_cntb_cuenta_cntb_tipo_cuenta_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cntb_cuenta_cntb_tipo_cuenta_id', 0);
$buscador_top_cntb_cuenta_imputable = Gral::getVars(Gral::VARS_POST, 'buscador_top_cntb_cuenta_imputable', -1);


$criterio = new Criterio(CntbCuenta::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CntbCuenta::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_cntb_cuenta_cntb_tipo_cuenta_id != 0) {
        $criterio->add('cntb_cuenta.cntb_tipo_cuenta_id', $buscador_top_cntb_cuenta_cntb_tipo_cuenta_id, Criterio::IGUAL);
    }
    if ($buscador_top_cntb_cuenta_imputable != -1) {
        $criterio->add('cntb_cuenta.imputable', $buscador_top_cntb_cuenta_imputable, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cntb_cuenta.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cntb_cuenta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta.familia_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta.numero', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta.nivel', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta.imputable', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta_plan.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta_plan.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta_plan.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_cuenta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_cuenta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_tipo_cuenta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cntb_cuenta_plan', 'cntb_cuenta_plan.id', 'cntb_cuenta.cntb_cuenta_plan_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_tipo_cuenta', 'cntb_tipo_cuenta.id', 'cntb_cuenta.cntb_tipo_cuenta_id', 'LEFT JOIN');
    
$criterio->addTabla('cntb_cuenta');
$criterio->setCriterios();

