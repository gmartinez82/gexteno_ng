<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdePedidoEnviado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdePedidoEnviado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_pedido_enviado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_pedido_enviado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido_enviado.asunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido_enviado.destinatario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido_enviado.cuerpo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido_enviado.adjunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido_enviado.codigo_envio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido_enviado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido_enviado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido_enviado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_pedido_enviado.pde_pedido_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_pedido_enviado.prv_proveedor_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_pedido_enviado');
$criterio->setCriterios();

