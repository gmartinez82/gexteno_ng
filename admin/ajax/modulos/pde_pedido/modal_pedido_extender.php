<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_pedido';
$hdn_error = 1;

$pde_pedido = new PdePedido();
$error = new Error();

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');
	$pde_pedido = PdePedido::getOxId($hdn_id);
	
	$txt_vencimiento = Gral::getFechaToDB(Gral::getVars(1, "txt_vencimiento"));
	$txa_observacion = Gral::getVars(1, "txa_observacion");
	//Gral::prr($pde_pedido);
	//exit;
	

	$estado = true;
	// control de datos

    if(!Ctrl::esFechaValida($txt_vencimiento)){ 
		$estado = false; $txt_vencimiento_error = Lang::_lang('Debe ingresar una fecha valida', true); 
	}else{
		if(!Date::esRangoValido(Date::getFechaActual(), $txt_vencimiento)){
			$estado = false; $txt_vencimiento_error = Lang::_lang('Debe ingresar una fecha mayor o igual a la actual', true); 
		}
	}	
                
	if($estado){
		$hdn_error = 0;
		$pde_pedido->setVencimiento($txt_vencimiento);
            
		$error = $pde_pedido->control();
		if(!$error->getExisteError()){
			$pde_pedido->save();
			
			// se registra estado del pedido, PdeEstado
			$pde_estado = $pde_pedido->setPdePedidoEstado(
				PdeTipoEstado::TIPO_ESTADO_EXTENDIDO,
				$txa_observacion
			 );

			// se avisa a destinatarios de cambios, PdePedidoDestinatario
			$pde_pedido->setPdePedidoDestinatariosAviso();
		}
            
	}
}else{
    $pedido_id = Gral::getVars(2, 'pedido_id', 0);
    if($pedido_id != 0){
        $pde_pedido = PdePedido::getOxId($pedido_id);
    } 
    $pde_pedido->setPdePedidoLeido();
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_pedido->setId($hdn_id);
}

$parametro = new Parametro();
?>
<form id='form_pedido' name='form_pedido' method='post' action='<?php echo Gral::getPath('path_http')."admin/ajax/modulos/pde_pedido/modal_pedido_extender.php" ?>' >
<div class='datos' >

    <?php include "pde_pedido_modal_top.php" ?>   
    
    <div class="par">
    	<div class="label"><?php Lang::_lang('Vencimiento') ?></div>
    	<div class="dato">
            <input name='txt_vencimiento' type='text' class='textbox' id='txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_pedido->getVencimiento())) ?>' size='20' />
            <input type='button' id='cal_txt_vencimiento' value='...' />

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_vencimiento'
                });
            </script>
    		<div class="error"><?php Gral::_echo($txt_vencimiento_error) ?></div>
        </div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Observaciones') ?></div>
    	<div class="dato">
			<textarea name='pde_pedido_txa_observacion' rows='10' cols='60' id='pde_pedido_txa_observacion' class='textbox'><?php Gral::_echoTxt($pde_pedido->getObservacion(), true) ?></textarea>
        </div>
    	<div class="error"></div>
    </div>

    <div class="botonera">
    	<input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Extender Vencimiento de Pedido') ?>' />
        <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pde_pedido->getId() ?>' />

    	<input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
    	<input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se registro Extension de Fecha correctamente') ?>' />
    </div>
    
</div>
</form>
