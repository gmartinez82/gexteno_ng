<?php
include_once "_autoload.php";
$criterio = new Criterio(UsLogin::SES_CRITERIOS);
$criterio->addTabla('us_login');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='us_login'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Usuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_login_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_login.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_us_login_us_usuario_id_comparador = $criterio->getComparadorDeCampo('us_login.us_usuario_id');
			if(trim($buscador_us_login_us_usuario_id_comparador) == '') $buscador_us_login_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_login_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_login_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Session') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_login_session' type='text' class='textbox' id='buscador_us_login_session' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_login.session')) ?>' size='22' />
        	<?php 
			$buscador_us_login_session_comparador = $criterio->getComparadorDeCampo('us_login.session');
			if(trim($buscador_us_login_session_comparador) == '') $buscador_us_login_session_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_login_session_comparador', Criterio::getComparadoresCmb(), $buscador_us_login_session_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('IP') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_login_ip' type='text' class='textbox' id='buscador_us_login_ip' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_login.ip')) ?>' size='22' />
        	<?php 
			$buscador_us_login_ip_comparador = $criterio->getComparadorDeCampo('us_login.ip');
			if(trim($buscador_us_login_ip_comparador) == '') $buscador_us_login_ip_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_login_ip_comparador', Criterio::getComparadoresCmb(), $buscador_us_login_ip_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Exito') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_login_exito' type='text' class='textbox' id='buscador_us_login_exito' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_login.exito')) ?>' size='22' />
        	<?php 
			$buscador_us_login_exito_comparador = $criterio->getComparadorDeCampo('us_login.exito');
			if(trim($buscador_us_login_exito_comparador) == '') $buscador_us_login_exito_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_login_exito_comparador', Criterio::getComparadoresCmb(), $buscador_us_login_exito_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Login') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_us_login_login', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_login.login'), 'textbox') ?>
		
        	<?php 
			$buscador_us_login_login_comparador = $criterio->getComparadorDeCampo('us_login.login');
			if(trim($buscador_us_login_login_comparador) == '') $buscador_us_login_login_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_login_login_comparador', Criterio::getComparadoresCmb(), $buscador_us_login_login_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Navegador') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_login_navegador' type='text' class='textbox' id='buscador_us_login_navegador' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_login.navegador')) ?>' size='22' />
        	<?php 
			$buscador_us_login_navegador_comparador = $criterio->getComparadorDeCampo('us_login.navegador');
			if(trim($buscador_us_login_navegador_comparador) == '') $buscador_us_login_navegador_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_login_navegador_comparador', Criterio::getComparadoresCmb(), $buscador_us_login_navegador_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_login_observacion' type='text' class='textbox' id='buscador_us_login_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_login.observacion')) ?>' size='22' />
        	<?php 
			$buscador_us_login_observacion_comparador = $criterio->getComparadorDeCampo('us_login.observacion');
			if(trim($buscador_us_login_observacion_comparador) == '') $buscador_us_login_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_login_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_us_login_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_login_estado', Gral::getCmbFiltro(Est::getEstsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_login.estado'), 'textbox')?>
        	<?php 
			$buscador_us_login_estado_comparador = $criterio->getComparadorDeCampo('us_login.estado');
			if(trim($buscador_us_login_estado_comparador) == '') $buscador_us_login_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_login_estado_comparador', Criterio::getComparadoresCmb(), $buscador_us_login_estado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_login_creado' type='text' class='textbox' id='buscador_us_login_creado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_login.creado')) ?>' size='15' />
					<input type='button' id='cal_buscador_us_login_creado' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_us_login_creado', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_us_login_creado'
						});
					</script>
		
        	<?php 
			$buscador_us_login_creado_comparador = $criterio->getComparadorDeCampo('us_login.creado');
			if(trim($buscador_us_login_creado_comparador) == '') $buscador_us_login_creado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_login_creado_comparador', Criterio::getComparadoresCmb(), $buscador_us_login_creado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_login_modificado' type='text' class='textbox' id='buscador_us_login_modificado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_login.modificado')) ?>' size='15' />
					<input type='button' id='cal_buscador_us_login_modificado' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_us_login_modificado', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_us_login_modificado'
						});
					</script>
		
        	<?php 
			$buscador_us_login_modificado_comparador = $criterio->getComparadorDeCampo('us_login.modificado');
			if(trim($buscador_us_login_modificado_comparador) == '') $buscador_us_login_modificado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_login_modificado_comparador', Criterio::getComparadoresCmb(), $buscador_us_login_modificado_comparador, 'textbox comparador') ?>
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

