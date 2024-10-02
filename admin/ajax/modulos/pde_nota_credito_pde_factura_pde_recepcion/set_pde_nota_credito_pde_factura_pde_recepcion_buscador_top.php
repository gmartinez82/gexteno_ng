<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeNotaCreditoPdeFacturaPdeRecepcion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.importe_unitario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura_pde_recepcion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura_pde_recepcion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura_pde_recepcion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_unidad_medida.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_unidad_medida.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_unidad_medida.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'pde_nota_credito_pde_factura_pde_recepcion.pde_nota_credito_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_factura_pde_recepcion', 'pde_factura_pde_recepcion.id', 'pde_nota_credito_pde_factura_pde_recepcion.pde_factura_pde_recepcion_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_nota_credito_pde_factura_pde_recepcion.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'pde_nota_credito_pde_factura_pde_recepcion.ins_unidad_medida_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'pde_nota_credito_pde_factura_pde_recepcion.gral_tipo_iva_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_nota_credito_pde_factura_pde_recepcion');
$criterio->setCriterios();

