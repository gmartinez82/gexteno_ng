<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_pedido';
$hdn_error = 1;

$pde_pedido = new PdePedido();

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');
	$pde_pedido = PdePedido::getOxId($hdn_id);
	
	$txa_observacion = Gral::getVars(1, "txa_observacion");
	//Gral::prr($pde_pedido);
	//exit;

	// control de datos
	$estado = true;     
                
	if($estado){
		$hdn_error = 0;
		//$pde_pedido->save();
						
		// se registra estado del pedido, PdeEstado
		$pde_estado = $pde_pedido->setPdePedidoEstado(
			PdeTipoEstado::TIPO_ESTADO_ANULADO,
			$txa_observacion
		 );

		// se avisa a destinatarios de cambios, PdePedidoDestinatario
		$pde_pedido->setPdePedidoDestinatariosAviso();
            
	}
}else{
    $pedido_id = Gral::getVars(2, 'pedido_id', 0);
    if($pedido_id != 0){
        $pde_pedido = PdePedido::getOxId($pedido_id);
    }
    $pde_pedido->setPdePedidoLeido();
}


?>
<form id='form_pedido' name='form_pedido' method='post' action='<?php echo Gral::getPath('path_http')."admin/ajax/modulos/pde_pedido/modal_pedido_anular.php" ?>' >
<div class='datos' >

    <?php include "pde_pedido_modal_top.php" ?>   
    
    <div class="par">
    	<div class="label"><?php Lang::_lang('Observaciones') ?></div>
    	<div class="dato">
			<textarea name='pde_pedido_txa_observacion' rows='10' cols='60' id='pde_pedido_txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion, true) ?></textarea>
        </div>
    	<div class="error"></div>
    </div>

    <div class="botonera">
    	<input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Anular Pedido') ?>' />
        <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pde_pedido->getId() ?>' />

    	<input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
    	<input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se Anulo el Pedido correctamente') ?>' />
    </div>
    
</div>
</form>
