<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AfipCitiComprasImportaciones::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AfipCitiComprasImportaciones::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('afip_citi_compras_importaciones.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('afip_citi_compras_importaciones.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_compras_importaciones.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_compras_importaciones.afip_citi_despacho_importacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_compras_importaciones.afip_citi_importe_neto_gravado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_compras_importaciones.afip_citi_alicuota_iva', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_compras_importaciones.afip_citi_importe_impuesto_liquidado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_compras_importaciones.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_debito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('afip_citi_prc', 'afip_citi_prc.id', 'afip_citi_compras_importaciones.afip_citi_prc_id', 'LEFT JOIN');
$criterio->addRealJoin('afip_citi_cabecera', 'afip_citi_cabecera.id', 'afip_citi_compras_importaciones.afip_citi_cabecera_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'afip_citi_compras_importaciones.pde_factura_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'afip_citi_compras_importaciones.pde_nota_credito_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'afip_citi_compras_importaciones.pde_nota_debito_id', 'LEFT JOIN');
    
$criterio->addTabla('afip_citi_compras_importaciones');
$criterio->setCriterios();

