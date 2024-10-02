<?php
include_once "_autoload.php";
$criterio = new Criterio(AppMovActividad::SES_CRITERIOS);
$criterio->addTabla('app_mov_actividad');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='app_mov_actividad'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_actividad_descripcion' type='text' class='textbox' id='buscador_app_mov_actividad_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_actividad_descripcion_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.descripcion');
			if(trim($buscador_app_mov_actividad_descripcion_comparador) == '') $buscador_app_mov_actividad_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AppMovInstalacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_app_mov_actividad_app_mov_instalacion_id', Gral::getCmbFiltro(AppMovInstalacion::getAppMovInstalacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.app_mov_instalacion_id'), 'textbox')?>
        	<?php 
			$buscador_app_mov_actividad_app_mov_instalacion_id_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.app_mov_instalacion_id');
			if(trim($buscador_app_mov_actividad_app_mov_instalacion_id_comparador) == '') $buscador_app_mov_actividad_app_mov_instalacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_app_mov_instalacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_app_mov_instalacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AppMovDispositivo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_app_mov_actividad_app_mov_dispositivo_id', Gral::getCmbFiltro(AppMovDispositivo::getAppMovDispositivosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.app_mov_dispositivo_id'), 'textbox')?>
        	<?php 
			$buscador_app_mov_actividad_app_mov_dispositivo_id_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.app_mov_dispositivo_id');
			if(trim($buscador_app_mov_actividad_app_mov_dispositivo_id_comparador) == '') $buscador_app_mov_actividad_app_mov_dispositivo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_app_mov_dispositivo_id_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_app_mov_dispositivo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AppMovModulo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_app_mov_actividad_app_mov_modulo_id', Gral::getCmbFiltro(AppMovModulo::getAppMovModulosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.app_mov_modulo_id'), 'textbox')?>
        	<?php 
			$buscador_app_mov_actividad_app_mov_modulo_id_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.app_mov_modulo_id');
			if(trim($buscador_app_mov_actividad_app_mov_modulo_id_comparador) == '') $buscador_app_mov_actividad_app_mov_modulo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_app_mov_modulo_id_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_app_mov_modulo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenApiToken') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_app_mov_actividad_gen_api_token_id', Gral::getCmbFiltro(GenApiToken::getGenApiTokensCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.gen_api_token_id'), 'textbox')?>
        	<?php 
			$buscador_app_mov_actividad_gen_api_token_id_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.gen_api_token_id');
			if(trim($buscador_app_mov_actividad_gen_api_token_id_comparador) == '') $buscador_app_mov_actividad_gen_api_token_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_gen_api_token_id_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_gen_api_token_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Metodo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_actividad_metodo' type='text' class='textbox' id='buscador_app_mov_actividad_metodo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.metodo')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_actividad_metodo_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.metodo');
			if(trim($buscador_app_mov_actividad_metodo_comparador) == '') $buscador_app_mov_actividad_metodo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_metodo_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_metodo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Registros') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_actividad_registros' type='text' class='textbox' id='buscador_app_mov_actividad_registros' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.registros')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_actividad_registros_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.registros');
			if(trim($buscador_app_mov_actividad_registros_comparador) == '') $buscador_app_mov_actividad_registros_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_registros_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_registros_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_actividad_codigo' type='text' class='textbox' id='buscador_app_mov_actividad_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.codigo')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_actividad_codigo_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.codigo');
			if(trim($buscador_app_mov_actividad_codigo_comparador) == '') $buscador_app_mov_actividad_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Activ') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_actividad_fecha_actividad' type='text' class='textbox' id='buscador_app_mov_actividad_fecha_actividad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.fecha_actividad')) ?>' size='15' />
					<input type='button' id='cal_buscador_app_mov_actividad_fecha_actividad' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_app_mov_actividad_fecha_actividad', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_app_mov_actividad_fecha_actividad'
						});
					</script>
		
        	<?php 
			$buscador_app_mov_actividad_fecha_actividad_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.fecha_actividad');
			if(trim($buscador_app_mov_actividad_fecha_actividad_comparador) == '') $buscador_app_mov_actividad_fecha_actividad_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_fecha_actividad_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_fecha_actividad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Token') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_actividad_token' type='text' class='textbox' id='buscador_app_mov_actividad_token' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.token')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_actividad_token_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.token');
			if(trim($buscador_app_mov_actividad_token_comparador) == '') $buscador_app_mov_actividad_token_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_token_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_token_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Respuesta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_actividad_respuesta' type='text' class='textbox' id='buscador_app_mov_actividad_respuesta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.respuesta')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_actividad_respuesta_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.respuesta');
			if(trim($buscador_app_mov_actividad_respuesta_comparador) == '') $buscador_app_mov_actividad_respuesta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_respuesta_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_respuesta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_actividad_observacion' type='text' class='textbox' id='buscador_app_mov_actividad_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_actividad.observacion')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_actividad_observacion_comparador = $criterio->getComparadorDeCampo('app_mov_actividad.observacion');
			if(trim($buscador_app_mov_actividad_observacion_comparador) == '') $buscador_app_mov_actividad_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_actividad_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_actividad_observacion_comparador, 'textbox comparador') ?>
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

