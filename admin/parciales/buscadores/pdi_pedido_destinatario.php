<?php
include_once "_autoload.php";
$criterio = new Criterio(PdiPedidoDestinatario::SES_CRITERIOS);
$criterio->addTabla('pdi_pedido_destinatario');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pdi_pedido_destinatario'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_pedido_destinatario_descripcion' type='text' class='textbox' id='buscador_pdi_pedido_destinatario_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido_destinatario.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pdi_pedido_destinatario_descripcion_comparador = $criterio->getComparadorDeCampo('pdi_pedido_destinatario.descripcion');
			if(trim($buscador_pdi_pedido_destinatario_descripcion_comparador) == '') $buscador_pdi_pedido_destinatario_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_destinatario_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_destinatario_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdiPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pdi_pedido_destinatario_pdi_pedido_id', Gral::getCmbFiltro(PdiPedido::getPdiPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido_destinatario.pdi_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pdi_pedido_destinatario_pdi_pedido_id_comparador = $criterio->getComparadorDeCampo('pdi_pedido_destinatario.pdi_pedido_id');
			if(trim($buscador_pdi_pedido_destinatario_pdi_pedido_id_comparador) == '') $buscador_pdi_pedido_destinatario_pdi_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_destinatario_pdi_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_destinatario_pdi_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('UsUsuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pdi_pedido_destinatario_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido_destinatario.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_pdi_pedido_destinatario_us_usuario_id_comparador = $criterio->getComparadorDeCampo('pdi_pedido_destinatario.us_usuario_id');
			if(trim($buscador_pdi_pedido_destinatario_us_usuario_id_comparador) == '') $buscador_pdi_pedido_destinatario_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_destinatario_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_destinatario_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_pedido_destinatario_codigo' type='text' class='textbox' id='buscador_pdi_pedido_destinatario_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido_destinatario.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pdi_pedido_destinatario_codigo_comparador = $criterio->getComparadorDeCampo('pdi_pedido_destinatario.codigo');
			if(trim($buscador_pdi_pedido_destinatario_codigo_comparador) == '') $buscador_pdi_pedido_destinatario_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_destinatario_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_destinatario_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_pedido_destinatario_observacion' type='text' class='textbox' id='buscador_pdi_pedido_destinatario_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido_destinatario.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pdi_pedido_destinatario_observacion_comparador = $criterio->getComparadorDeCampo('pdi_pedido_destinatario.observacion');
			if(trim($buscador_pdi_pedido_destinatario_observacion_comparador) == '') $buscador_pdi_pedido_destinatario_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_destinatario_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_destinatario_observacion_comparador, 'textbox comparador') ?>
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

