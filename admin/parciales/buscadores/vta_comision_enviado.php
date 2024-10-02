<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaComisionEnviado::SES_CRITERIOS);
$criterio->addTabla('vta_comision_enviado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_comision_enviado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_enviado_descripcion' type='text' class='textbox' id='buscador_vta_comision_enviado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_enviado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_enviado_descripcion_comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.descripcion');
			if(trim($buscador_vta_comision_enviado_descripcion_comparador) == '') $buscador_vta_comision_enviado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_enviado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_enviado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComision') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comision_enviado_vta_comision_id', Gral::getCmbFiltro(VtaComision::getVtaComisionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_enviado.vta_comision_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comision_enviado_vta_comision_id_comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.vta_comision_id');
			if(trim($buscador_vta_comision_enviado_vta_comision_id_comparador) == '') $buscador_vta_comision_enviado_vta_comision_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_enviado_vta_comision_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_enviado_vta_comision_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Asunto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_enviado_asunto' type='text' class='textbox' id='buscador_vta_comision_enviado_asunto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_enviado.asunto')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_enviado_asunto_comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.asunto');
			if(trim($buscador_vta_comision_enviado_asunto_comparador) == '') $buscador_vta_comision_enviado_asunto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_enviado_asunto_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_enviado_asunto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Destinatario') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_enviado_destinatario' type='text' class='textbox' id='buscador_vta_comision_enviado_destinatario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_enviado.destinatario')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_enviado_destinatario_comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.destinatario');
			if(trim($buscador_vta_comision_enviado_destinatario_comparador) == '') $buscador_vta_comision_enviado_destinatario_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_enviado_destinatario_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_enviado_destinatario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cuerpo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_enviado_cuerpo' type='text' class='textbox' id='buscador_vta_comision_enviado_cuerpo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_enviado.cuerpo')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_enviado_cuerpo_comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.cuerpo');
			if(trim($buscador_vta_comision_enviado_cuerpo_comparador) == '') $buscador_vta_comision_enviado_cuerpo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_enviado_cuerpo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_enviado_cuerpo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Adjunto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_enviado_adjunto' type='text' class='textbox' id='buscador_vta_comision_enviado_adjunto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_enviado.adjunto')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_enviado_adjunto_comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.adjunto');
			if(trim($buscador_vta_comision_enviado_adjunto_comparador) == '') $buscador_vta_comision_enviado_adjunto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_enviado_adjunto_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_enviado_adjunto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo de Envio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_enviado_codigo_envio' type='text' class='textbox' id='buscador_vta_comision_enviado_codigo_envio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_enviado.codigo_envio')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_enviado_codigo_envio_comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.codigo_envio');
			if(trim($buscador_vta_comision_enviado_codigo_envio_comparador) == '') $buscador_vta_comision_enviado_codigo_envio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_enviado_codigo_envio_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_enviado_codigo_envio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_enviado_codigo' type='text' class='textbox' id='buscador_vta_comision_enviado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_enviado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_enviado_codigo_comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.codigo');
			if(trim($buscador_vta_comision_enviado_codigo_comparador) == '') $buscador_vta_comision_enviado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_enviado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_enviado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_enviado_observacion' type='text' class='textbox' id='buscador_vta_comision_enviado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_enviado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_enviado_observacion_comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.observacion');
			if(trim($buscador_vta_comision_enviado_observacion_comparador) == '') $buscador_vta_comision_enviado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_enviado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_enviado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_comision_enviado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_enviado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_comision_enviado_estado_comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.estado');
			if(trim($buscador_vta_comision_enviado_estado_comparador) == '') $buscador_vta_comision_enviado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_enviado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_enviado_estado_comparador, 'textbox comparador') ?>
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

