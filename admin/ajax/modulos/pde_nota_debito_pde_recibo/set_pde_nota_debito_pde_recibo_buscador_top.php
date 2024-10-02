<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeNotaDebitoPdeRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeNotaDebitoPdeRecibo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_nota_debito_pde_recibo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_nota_debito_pde_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito_pde_recibo.importe_afectado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito_pde_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito_pde_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito_pde_recibo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'pde_nota_debito_pde_recibo.pde_nota_debito_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_recibo', 'pde_recibo.id', 'pde_nota_debito_pde_recibo.pde_recibo_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_nota_debito_pde_recibo');
$criterio->setCriterios();

