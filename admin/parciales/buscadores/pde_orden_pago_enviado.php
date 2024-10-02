<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeOrdenPagoEnviado::SES_CRITERIOS);
$criterio->addTabla('pde_orden_pago_enviado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_orden_pago_enviado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_enviado_descripcion' type='text' class='textbox' id='buscador_pde_orden_pago_enviado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_enviado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_enviado_descripcion_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_enviado.descripcion');
			if(trim($buscador_pde_orden_pago_enviado_descripcion_comparador) == '') $buscador_pde_orden_pago_enviado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_enviado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOrdenPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_pde_orden_pago_id', Gral::getCmbFiltro(PdeOrdenPago::getPdeOrdenPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_enviado.pde_orden_pago_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_enviado_pde_orden_pago_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_enviado.pde_orden_pago_id');
			if(trim($buscador_pde_orden_pago_enviado_pde_orden_pago_id_comparador) == '') $buscador_pde_orden_pago_enviado_pde_orden_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_pde_orden_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_enviado_pde_orden_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Asunto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_enviado_asunto' type='text' class='textbox' id='buscador_pde_orden_pago_enviado_asunto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_enviado.asunto')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_enviado_asunto_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_enviado.asunto');
			if(trim($buscador_pde_orden_pago_enviado_asunto_comparador) == '') $buscador_pde_orden_pago_enviado_asunto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_asunto_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_enviado_asunto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Destinatario') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_enviado_destinatario' type='text' class='textbox' id='buscador_pde_orden_pago_enviado_destinatario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_enviado.destinatario')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_enviado_destinatario_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_enviado.destinatario');
			if(trim($buscador_pde_orden_pago_enviado_destinatario_comparador) == '') $buscador_pde_orden_pago_enviado_destinatario_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_destinatario_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_enviado_destinatario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cuerpo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_enviado_cuerpo' type='text' class='textbox' id='buscador_pde_orden_pago_enviado_cuerpo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_enviado.cuerpo')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_enviado_cuerpo_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_enviado.cuerpo');
			if(trim($buscador_pde_orden_pago_enviado_cuerpo_comparador) == '') $buscador_pde_orden_pago_enviado_cuerpo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_cuerpo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_enviado_cuerpo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Adjunto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_enviado_adjunto' type='text' class='textbox' id='buscador_pde_orden_pago_enviado_adjunto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_enviado.adjunto')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_enviado_adjunto_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_enviado.adjunto');
			if(trim($buscador_pde_orden_pago_enviado_adjunto_comparador) == '') $buscador_pde_orden_pago_enviado_adjunto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_adjunto_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_enviado_adjunto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo de Envio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_enviado_codigo_envio' type='text' class='textbox' id='buscador_pde_orden_pago_enviado_codigo_envio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_enviado.codigo_envio')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_enviado_codigo_envio_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_enviado.codigo_envio');
			if(trim($buscador_pde_orden_pago_enviado_codigo_envio_comparador) == '') $buscador_pde_orden_pago_enviado_codigo_envio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_codigo_envio_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_enviado_codigo_envio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_enviado_codigo' type='text' class='textbox' id='buscador_pde_orden_pago_enviado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_enviado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_enviado_codigo_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_enviado.codigo');
			if(trim($buscador_pde_orden_pago_enviado_codigo_comparador) == '') $buscador_pde_orden_pago_enviado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_enviado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_enviado_observacion' type='text' class='textbox' id='buscador_pde_orden_pago_enviado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_enviado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_enviado_observacion_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_enviado.observacion');
			if(trim($buscador_pde_orden_pago_enviado_observacion_comparador) == '') $buscador_pde_orden_pago_enviado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_enviado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_enviado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_orden_pago_enviado_estado_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_enviado.estado');
			if(trim($buscador_pde_orden_pago_enviado_estado_comparador) == '') $buscador_pde_orden_pago_enviado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_enviado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_enviado_estado_comparador, 'textbox comparador') ?>
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

