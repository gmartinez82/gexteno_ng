<?php
include "_autoload.php";

$cmb_pde_centro_pedido_id = Gral::getVars(1, 'cmb_pde_centro_pedido_id', null);
$dbsug_ins_insumo_id = Gral::getVars(1, 'dbsug_ins_insumo_id', null);
$cmb_pde_urgencia_id = Gral::getVars(1, 'cmb_pde_urgencia_id', null);
$txt_cantidad = Gral::getVars(1, 'txt_cantidad', 0);
$txt_vencimiento = Gral::getVars(1, 'txt_vencimiento', 0);
$txa_comentario_proveedor = Gral::getVars(1, 'txa_comentario_proveedor', '');
$txa_observacion = Gral::getVars(1, 'txa_observacion', '');

$hdn_id = Gral::getVars(1, 'hdn_id', 0);

$chk_proveedor_id= $_POST['chk_proveedor_id'];
//Gral::prr($chk_proveedor_id);

$chk_marca_id= $_POST['chk_marca_id'];
//Gral::prr($chk_marca_id);


$pde_pedido = PdePedido::getOxId($hdn_id);
if(!$pde_pedido){
    $pde_pedido = new PdePedido();
}

$pde_pedido->setPdeCentroPedidoId($cmb_pde_centro_pedido_id);
$pde_pedido->setInsInsumoId($dbsug_ins_insumo_id);
$pde_pedido->setPdeUrgenciaId($cmb_pde_urgencia_id);
$pde_pedido->setCantidad($txt_cantidad);
$pde_pedido->setVencimiento($txt_vencimiento);
$pde_pedido->setComentarioProveedor($txa_comentario_proveedor);
$pde_pedido->setObservacion($txa_observacion);
$pde_pedido->setEstado(1);
$pde_pedido->save();

// se genera el codigo del pedido
$pde_pedido->setCodigo($pde_pedido->getCodigoConCeros());
$pde_pedido->save();

// se registran los proveedores que participaran en la cotizacion
if(is_array($chk_proveedor_id)){
    $pde_pedido->deletePdePedidoPrvProveedors();
    foreach($chk_proveedor_id as $prv_proveedor_id){
        $pde_pedido_prv_proveedor = new PdePedidoPrvProveedor();
        $pde_pedido_prv_proveedor->setPdePedidoId($pde_pedido->getId());
        $pde_pedido_prv_proveedor->setPrvProveedorId($prv_proveedor_id);
        $pde_pedido_prv_proveedor->save();        
    }
}
/*
// se registran las marcas sugeridas necesitadas
if(is_array($chk_marca_id)){
    $pde_pedido->deletePdePedidoInsMarcas();
    foreach($chk_marca_id as $ins_marca_id){
        $pde_pedido_ins_marca = new PdePedidoInsMarca();
        $pde_pedido_ins_marca->setPdePedidoId($pde_pedido->getId());
        $pde_pedido_ins_marca->setInsMarcaId($ins_marca_id);
        $pde_pedido_ins_marca->save();
    }
}
*/

// se registra estado del pedido, PdeEstado en SOLICITADO, si aun no tiene estado asignado
if(!$pde_pedido->getPdeEstadoActual()){
    $pde_estado = $pde_pedido->setPdePedidoEstado(
            PdeTipoEstado::TIPO_ESTADO_SOLICITADO,
            $pde_pedido->getObservacion()
    );

    // se registran destinatarios del pedido, PdePedidoDestinatario
    $pde_pedido->setPdePedidoDestinatarios();

    // se envia aviso ---------------------------------------------------------------------
    $asunto = 'PDE Pedido Solicitado #'.$pde_pedido->getCodigo().' '.date('d/m/Y H:m');
    $pde_pedido->enviarAvisos($asunto);
    // ------------------------------------------------------------------------------------   
}else{
    // se registran destinatarios del pedido, PdePedidoDestinatario
    $pde_pedido->setPdePedidoDestinatarios();

    // se envia aviso ---------------------------------------------------------------------
    $asunto = 'PDE Pedido Nuevo. #'.$pde_pedido->getCodigo().' '.date('d/m/Y H:m');
    $pde_pedido->enviarAvisos($asunto, $nuevos = true);
    // ------------------------------------------------------------------------------------       
}



?>
