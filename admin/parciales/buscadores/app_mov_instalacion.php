<?php
include_once "_autoload.php";
$criterio = new Criterio(AppMovInstalacion::SES_CRITERIOS);
$criterio->addTabla('app_mov_instalacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='app_mov_instalacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_instalacion_descripcion' type='text' class='textbox' id='buscador_app_mov_instalacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_instalacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_instalacion_descripcion_comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.descripcion');
			if(trim($buscador_app_mov_instalacion_descripcion_comparador) == '') $buscador_app_mov_instalacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_instalacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_instalacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AppMovDispositivo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_app_mov_instalacion_app_mov_dispositivo_id', Gral::getCmbFiltro(AppMovDispositivo::getAppMovDispositivosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_instalacion.app_mov_dispositivo_id'), 'textbox')?>
        	<?php 
			$buscador_app_mov_instalacion_app_mov_dispositivo_id_comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.app_mov_dispositivo_id');
			if(trim($buscador_app_mov_instalacion_app_mov_dispositivo_id_comparador) == '') $buscador_app_mov_instalacion_app_mov_dispositivo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_app_mov_instalacion_app_mov_dispositivo_id_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_instalacion_app_mov_dispositivo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AppMovModulo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_app_mov_instalacion_app_mov_modulo_id', Gral::getCmbFiltro(AppMovModulo::getAppMovModulosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_instalacion.app_mov_modulo_id'), 'textbox')?>
        	<?php 
			$buscador_app_mov_instalacion_app_mov_modulo_id_comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.app_mov_modulo_id');
			if(trim($buscador_app_mov_instalacion_app_mov_modulo_id_comparador) == '') $buscador_app_mov_instalacion_app_mov_modulo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_app_mov_instalacion_app_mov_modulo_id_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_instalacion_app_mov_modulo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenApiToken') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_app_mov_instalacion_gen_api_token_id', Gral::getCmbFiltro(GenApiToken::getGenApiTokensCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_instalacion.gen_api_token_id'), 'textbox')?>
        	<?php 
			$buscador_app_mov_instalacion_gen_api_token_id_comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.gen_api_token_id');
			if(trim($buscador_app_mov_instalacion_gen_api_token_id_comparador) == '') $buscador_app_mov_instalacion_gen_api_token_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_app_mov_instalacion_gen_api_token_id_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_instalacion_gen_api_token_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AppMovVersion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_app_mov_instalacion_app_mov_version_id', Gral::getCmbFiltro(AppMovVersion::getAppMovVersionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_instalacion.app_mov_version_id'), 'textbox')?>
        	<?php 
			$buscador_app_mov_instalacion_app_mov_version_id_comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.app_mov_version_id');
			if(trim($buscador_app_mov_instalacion_app_mov_version_id_comparador) == '') $buscador_app_mov_instalacion_app_mov_version_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_app_mov_instalacion_app_mov_version_id_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_instalacion_app_mov_version_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_instalacion_codigo' type='text' class='textbox' id='buscador_app_mov_instalacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_instalacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_instalacion_codigo_comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.codigo');
			if(trim($buscador_app_mov_instalacion_codigo_comparador) == '') $buscador_app_mov_instalacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_instalacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_instalacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('App Version') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_instalacion_app_version' type='text' class='textbox' id='buscador_app_mov_instalacion_app_version' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_instalacion.app_version')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_instalacion_app_version_comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.app_version');
			if(trim($buscador_app_mov_instalacion_app_version_comparador) == '') $buscador_app_mov_instalacion_app_version_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_instalacion_app_version_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_instalacion_app_version_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('App Version Activa') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_instalacion_app_version_activa' type='text' class='textbox' id='buscador_app_mov_instalacion_app_version_activa' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_instalacion.app_version_activa')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_instalacion_app_version_activa_comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.app_version_activa');
			if(trim($buscador_app_mov_instalacion_app_version_activa_comparador) == '') $buscador_app_mov_instalacion_app_version_activa_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_instalacion_app_version_activa_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_instalacion_app_version_activa_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Ult Activ') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_instalacion_fecha_ultima_actividad' type='text' class='textbox' id='buscador_app_mov_instalacion_fecha_ultima_actividad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_instalacion.fecha_ultima_actividad')) ?>' size='15' />
					<input type='button' id='cal_buscador_app_mov_instalacion_fecha_ultima_actividad' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_app_mov_instalacion_fecha_ultima_actividad', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_app_mov_instalacion_fecha_ultima_actividad'
						});
					</script>
		
        	<?php 
			$buscador_app_mov_instalacion_fecha_ultima_actividad_comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.fecha_ultima_actividad');
			if(trim($buscador_app_mov_instalacion_fecha_ultima_actividad_comparador) == '') $buscador_app_mov_instalacion_fecha_ultima_actividad_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_instalacion_fecha_ultima_actividad_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_instalacion_fecha_ultima_actividad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('UsUsuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_app_mov_instalacion_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_instalacion.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_app_mov_instalacion_us_usuario_id_comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.us_usuario_id');
			if(trim($buscador_app_mov_instalacion_us_usuario_id_comparador) == '') $buscador_app_mov_instalacion_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_app_mov_instalacion_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_instalacion_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_instalacion_observacion' type='text' class='textbox' id='buscador_app_mov_instalacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_instalacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_instalacion_observacion_comparador = $criterio->getComparadorDeCampo('app_mov_instalacion.observacion');
			if(trim($buscador_app_mov_instalacion_observacion_comparador) == '') $buscador_app_mov_instalacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_instalacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_instalacion_observacion_comparador, 'textbox comparador') ?>
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

