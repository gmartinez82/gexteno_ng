<?php
//sleep(4);
include "_autoload.php";
$user = UsUsuario::autenticado();

$pag = Gral::getVars(2, 'pag', 1);
PdiPedido::setSesPag($pag);

// se inicializan los galpons que el usuario puede gestionar
$string_panoles_permitidos_para_in_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();


$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
$criterio->addDistinct(true);
//$criterio->add('pdi_pedido_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL);
//$criterio->add('pdi_pedido_destinatario.estado', 1, Criterio::IGUAL);

//$criterio->add('pdi_estado.actual', 1, Criterio::IGUAL, false, '');
$criterio->add('pdi_tipo_estado.gestionable', 1, Criterio::IGUAL);
$criterio->add('pdi_tipo_origen.requiere_atencion', 1, Criterio::IGUAL);

//if(!$user->getAbsoluto()){
    $criterio->addInicioSubconsulta();
    $criterio->add('pdi_pedido.pan_panol_origen', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
    $criterio->add('pdi_pedido.pan_panol_destino', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
//}

$criterio->addTabla('pdi_pedido');
//$criterio->addRealJoin('pdi_estado', 'pdi_estado.pdi_pedido_id', 'pdi_pedido.id');
//$criterio->addRealJoin('pdi_pedido_destinatario', 'pdi_pedido_destinatario.pdi_pedido_id', 'pdi_pedido.id');

$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiPedido::getSesPagCantidad(), PdiPedido::getSesPag());

$pdi_pedidos = PdiPedido::getPdiPedidos($paginador, $criterio);
//Gral::prr($pdi_pedidos); exit;

include 'pdi_pedido_gestion_datos.php';
?>
<script>
setInitPdiPedidos();
</script>
