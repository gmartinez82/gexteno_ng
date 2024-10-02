<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CntbDiarioAsientoPdeNotaCredito::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoPdeNotaCredito::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cntb_diario_asiento_pde_nota_credito.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cntb_diario_asiento_pde_nota_credito.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.id', 'cntb_diario_asiento_pde_nota_credito.cntb_periodo_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'cntb_diario_asiento_pde_nota_credito.cntb_diario_asiento_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'cntb_diario_asiento_pde_nota_credito.pde_nota_credito_id', 'LEFT JOIN');
    
$criterio->addTabla('cntb_diario_asiento_pde_nota_credito');
$criterio->setCriterios();

