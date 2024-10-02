<?php
include_once "_autoload.php";
$criterio = new Criterio(GralTipoIvaWsFeParamTipoIva::SES_CRITERIOS);
$criterio->addTabla('gral_tipo_iva_ws_fe_param_tipo_iva');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_tipo_iva_ws_fe_param_tipo_iva'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_tipo_iva_ws_fe_param_tipo_iva_descripcion' type='text' class='textbox' id='buscador_gral_tipo_iva_ws_fe_param_tipo_iva_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_tipo_iva_ws_fe_param_tipo_iva_descripcion_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.descripcion');
			if(trim($buscador_gral_tipo_iva_ws_fe_param_tipo_iva_descripcion_comparador) == '') $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.gral_tipo_iva_id'), 'textbox')?>
        	<?php 
			$buscador_gral_tipo_iva_ws_fe_param_tipo_iva_gral_tipo_iva_id_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.gral_tipo_iva_id');
			if(trim($buscador_gral_tipo_iva_ws_fe_param_tipo_iva_gral_tipo_iva_id_comparador) == '') $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_gral_tipo_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_gral_tipo_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_gral_tipo_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParamTipoIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_ws_fe_param_tipo_iva_id', Gral::getCmbFiltro(WsFeParamTipoIva::getWsFeParamTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.ws_fe_param_tipo_iva_id'), 'textbox')?>
        	<?php 
			$buscador_gral_tipo_iva_ws_fe_param_tipo_iva_ws_fe_param_tipo_iva_id_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.ws_fe_param_tipo_iva_id');
			if(trim($buscador_gral_tipo_iva_ws_fe_param_tipo_iva_ws_fe_param_tipo_iva_id_comparador) == '') $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_ws_fe_param_tipo_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_ws_fe_param_tipo_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_ws_fe_param_tipo_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_tipo_iva_ws_fe_param_tipo_iva_codigo' type='text' class='textbox' id='buscador_gral_tipo_iva_ws_fe_param_tipo_iva_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_tipo_iva_ws_fe_param_tipo_iva_codigo_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.codigo');
			if(trim($buscador_gral_tipo_iva_ws_fe_param_tipo_iva_codigo_comparador) == '') $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_tipo_iva_ws_fe_param_tipo_iva_observacion' type='text' class='textbox' id='buscador_gral_tipo_iva_ws_fe_param_tipo_iva_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_tipo_iva_ws_fe_param_tipo_iva_observacion_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.observacion');
			if(trim($buscador_gral_tipo_iva_ws_fe_param_tipo_iva_observacion_comparador) == '') $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_tipo_iva_ws_fe_param_tipo_iva_estado_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva_ws_fe_param_tipo_iva.estado');
			if(trim($buscador_gral_tipo_iva_ws_fe_param_tipo_iva_estado_comparador) == '') $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_ws_fe_param_tipo_iva_estado_comparador, 'textbox comparador') ?>
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

