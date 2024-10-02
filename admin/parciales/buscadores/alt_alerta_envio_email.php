<?php
include_once "_autoload.php";
$criterio = new Criterio(AltAlertaEnvioEmail::SES_CRITERIOS);
$criterio->addTabla('alt_alerta_envio_email');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='alt_alerta_envio_email'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_envio_email_descripcion' type='text' class='textbox' id='buscador_alt_alerta_envio_email_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_envio_email.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_envio_email_descripcion_comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.descripcion');
			if(trim($buscador_alt_alerta_envio_email_descripcion_comparador) == '') $buscador_alt_alerta_envio_email_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_envio_email_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AltAlerta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_alt_alerta_id', Gral::getCmbFiltro(AltAlerta::getAltAlertasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_envio_email.alt_alerta_id'), 'textbox')?>
        	<?php 
			$buscador_alt_alerta_envio_email_alt_alerta_id_comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.alt_alerta_id');
			if(trim($buscador_alt_alerta_envio_email_alt_alerta_id_comparador) == '') $buscador_alt_alerta_envio_email_alt_alerta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_alt_alerta_id_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_envio_email_alt_alerta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AltAlertaUsUsuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_alt_alerta_us_usuario_id', Gral::getCmbFiltro(AltAlertaUsUsuario::getAltAlertaUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_envio_email.alt_alerta_us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_alt_alerta_envio_email_alt_alerta_us_usuario_id_comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.alt_alerta_us_usuario_id');
			if(trim($buscador_alt_alerta_envio_email_alt_alerta_us_usuario_id_comparador) == '') $buscador_alt_alerta_envio_email_alt_alerta_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_alt_alerta_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_envio_email_alt_alerta_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Asunto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_envio_email_asunto' type='text' class='textbox' id='buscador_alt_alerta_envio_email_asunto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_envio_email.asunto')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_envio_email_asunto_comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.asunto');
			if(trim($buscador_alt_alerta_envio_email_asunto_comparador) == '') $buscador_alt_alerta_envio_email_asunto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_asunto_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_envio_email_asunto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_envio_email_email' type='text' class='textbox' id='buscador_alt_alerta_envio_email_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_envio_email.email')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_envio_email_email_comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.email');
			if(trim($buscador_alt_alerta_envio_email_email_comparador) == '') $buscador_alt_alerta_envio_email_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_email_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_envio_email_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cuerpo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_envio_email_cuerpo' type='text' class='textbox' id='buscador_alt_alerta_envio_email_cuerpo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_envio_email.cuerpo')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_envio_email_cuerpo_comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.cuerpo');
			if(trim($buscador_alt_alerta_envio_email_cuerpo_comparador) == '') $buscador_alt_alerta_envio_email_cuerpo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_cuerpo_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_envio_email_cuerpo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Adjunto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_envio_email_adjunto' type='text' class='textbox' id='buscador_alt_alerta_envio_email_adjunto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_envio_email.adjunto')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_envio_email_adjunto_comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.adjunto');
			if(trim($buscador_alt_alerta_envio_email_adjunto_comparador) == '') $buscador_alt_alerta_envio_email_adjunto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_adjunto_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_envio_email_adjunto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo de Envio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_envio_email_codigo_envio' type='text' class='textbox' id='buscador_alt_alerta_envio_email_codigo_envio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_envio_email.codigo_envio')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_envio_email_codigo_envio_comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.codigo_envio');
			if(trim($buscador_alt_alerta_envio_email_codigo_envio_comparador) == '') $buscador_alt_alerta_envio_email_codigo_envio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_codigo_envio_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_envio_email_codigo_envio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_envio_email_codigo' type='text' class='textbox' id='buscador_alt_alerta_envio_email_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_envio_email.codigo')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_envio_email_codigo_comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.codigo');
			if(trim($buscador_alt_alerta_envio_email_codigo_comparador) == '') $buscador_alt_alerta_envio_email_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_envio_email_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_envio_email_observacion' type='text' class='textbox' id='buscador_alt_alerta_envio_email_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_envio_email.observacion')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_envio_email_observacion_comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.observacion');
			if(trim($buscador_alt_alerta_envio_email_observacion_comparador) == '') $buscador_alt_alerta_envio_email_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_envio_email_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta_envio_email.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_alt_alerta_envio_email_estado_comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.estado');
			if(trim($buscador_alt_alerta_envio_email_estado_comparador) == '') $buscador_alt_alerta_envio_email_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_envio_email_estado_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_envio_email_estado_comparador, 'textbox comparador') ?>
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

