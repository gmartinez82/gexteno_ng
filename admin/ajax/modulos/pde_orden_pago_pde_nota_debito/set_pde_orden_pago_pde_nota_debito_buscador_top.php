<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeOrdenPagoPdeNotaDebito::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeOrdenPagoPdeNotaDebito::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_orden_pago_pde_nota_debito.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_orden_pago_pde_nota_debito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_pde_nota_debito.importe_afectado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_pde_nota_debito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_pde_nota_debito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_pde_nota_debito.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_orden_pago_pde_nota_debito.pde_orden_pago_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'pde_orden_pago_pde_nota_debito.pde_nota_debito_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_orden_pago_pde_nota_debito');
$criterio->setCriterios();

