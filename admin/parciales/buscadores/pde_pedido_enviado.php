<?php
include_once "_autoload.php";
$criterio = new Criterio(PdePedidoEnviado::SES_CRITERIOS);
$criterio->addTabla('pde_pedido_enviado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_pedido_enviado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_enviado_descripcion' type='text' class='textbox' id='buscador_pde_pedido_enviado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_enviado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_enviado_descripcion_comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.descripcion');
			if(trim($buscador_pde_pedido_enviado_descripcion_comparador) == '') $buscador_pde_pedido_enviado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_enviado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_enviado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdePedidoEnviado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_pedido_enviado_pde_pedido_id', Gral::getCmbFiltro(PdePedido::getPdePedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_enviado.pde_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_pedido_enviado_pde_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.pde_pedido_id');
			if(trim($buscador_pde_pedido_enviado_pde_pedido_id_comparador) == '') $buscador_pde_pedido_enviado_pde_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_enviado_pde_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_enviado_pde_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_pedido_enviado_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_enviado.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_pedido_enviado_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.prv_proveedor_id');
			if(trim($buscador_pde_pedido_enviado_prv_proveedor_id_comparador) == '') $buscador_pde_pedido_enviado_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_enviado_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_enviado_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Asunto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_enviado_asunto' type='text' class='textbox' id='buscador_pde_pedido_enviado_asunto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_enviado.asunto')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_enviado_asunto_comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.asunto');
			if(trim($buscador_pde_pedido_enviado_asunto_comparador) == '') $buscador_pde_pedido_enviado_asunto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_enviado_asunto_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_enviado_asunto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Destinatario') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_enviado_destinatario' type='text' class='textbox' id='buscador_pde_pedido_enviado_destinatario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_enviado.destinatario')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_enviado_destinatario_comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.destinatario');
			if(trim($buscador_pde_pedido_enviado_destinatario_comparador) == '') $buscador_pde_pedido_enviado_destinatario_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_enviado_destinatario_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_enviado_destinatario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cuerpo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_enviado_cuerpo' type='text' class='textbox' id='buscador_pde_pedido_enviado_cuerpo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_enviado.cuerpo')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_enviado_cuerpo_comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.cuerpo');
			if(trim($buscador_pde_pedido_enviado_cuerpo_comparador) == '') $buscador_pde_pedido_enviado_cuerpo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_enviado_cuerpo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_enviado_cuerpo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Adjunto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_enviado_adjunto' type='text' class='textbox' id='buscador_pde_pedido_enviado_adjunto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_enviado.adjunto')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_enviado_adjunto_comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.adjunto');
			if(trim($buscador_pde_pedido_enviado_adjunto_comparador) == '') $buscador_pde_pedido_enviado_adjunto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_enviado_adjunto_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_enviado_adjunto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo de Envio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_enviado_codigo_envio' type='text' class='textbox' id='buscador_pde_pedido_enviado_codigo_envio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_enviado.codigo_envio')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_enviado_codigo_envio_comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.codigo_envio');
			if(trim($buscador_pde_pedido_enviado_codigo_envio_comparador) == '') $buscador_pde_pedido_enviado_codigo_envio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_enviado_codigo_envio_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_enviado_codigo_envio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_enviado_codigo' type='text' class='textbox' id='buscador_pde_pedido_enviado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_enviado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_enviado_codigo_comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.codigo');
			if(trim($buscador_pde_pedido_enviado_codigo_comparador) == '') $buscador_pde_pedido_enviado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_enviado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_enviado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_enviado_observacion' type='text' class='textbox' id='buscador_pde_pedido_enviado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_enviado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_enviado_observacion_comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.observacion');
			if(trim($buscador_pde_pedido_enviado_observacion_comparador) == '') $buscador_pde_pedido_enviado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_enviado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_enviado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_pedido_enviado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_enviado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_pedido_enviado_estado_comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.estado');
			if(trim($buscador_pde_pedido_enviado_estado_comparador) == '') $buscador_pde_pedido_enviado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_enviado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_enviado_estado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		     
  <div class='botones'>
    <input name='btn_buscar' type='submit' id='btn_buscar' value='&nbsp;&nbsp;&nbsp; <?php Lang::_lang('Buscar') ?>' />    
    <input name='btn_limpiar' type='submit' id='btn_limpiar' value='<?php Lang::_lang('Limpiar') ?>' />
  </div>

</form>
</div>
<script>
try{
	setInit();
	setInitAdm();
}catch(e){}
</script>

