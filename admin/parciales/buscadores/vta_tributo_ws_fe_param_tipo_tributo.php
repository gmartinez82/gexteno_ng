<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaTributoWsFeParamTipoTributo::SES_CRITERIOS);
$criterio->addTabla('vta_tributo_ws_fe_param_tipo_tributo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_tributo_ws_fe_param_tipo_tributo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_ws_fe_param_tipo_tributo_descripcion' type='text' class='textbox' id='buscador_vta_tributo_ws_fe_param_tipo_tributo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_ws_fe_param_tipo_tributo_descripcion_comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.descripcion');
			if(trim($buscador_vta_tributo_ws_fe_param_tipo_tributo_descripcion_comparador) == '') $buscador_vta_tributo_ws_fe_param_tipo_tributo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_ws_fe_param_tipo_tributo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaTributo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_vta_tributo_id', Gral::getCmbFiltro(VtaTributo::getVtaTributosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.vta_tributo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_tributo_ws_fe_param_tipo_tributo_vta_tributo_id_comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.vta_tributo_id');
			if(trim($buscador_vta_tributo_ws_fe_param_tipo_tributo_vta_tributo_id_comparador) == '') $buscador_vta_tributo_ws_fe_param_tipo_tributo_vta_tributo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_vta_tributo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_ws_fe_param_tipo_tributo_vta_tributo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParamTipoTributo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_ws_fe_param_tipo_tributo_id', Gral::getCmbFiltro(WsFeParamTipoTributo::getWsFeParamTipoTributosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.ws_fe_param_tipo_tributo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_tributo_ws_fe_param_tipo_tributo_ws_fe_param_tipo_tributo_id_comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.ws_fe_param_tipo_tributo_id');
			if(trim($buscador_vta_tributo_ws_fe_param_tipo_tributo_ws_fe_param_tipo_tributo_id_comparador) == '') $buscador_vta_tributo_ws_fe_param_tipo_tributo_ws_fe_param_tipo_tributo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_ws_fe_param_tipo_tributo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_ws_fe_param_tipo_tributo_ws_fe_param_tipo_tributo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_ws_fe_param_tipo_tributo_codigo' type='text' class='textbox' id='buscador_vta_tributo_ws_fe_param_tipo_tributo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_ws_fe_param_tipo_tributo_codigo_comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.codigo');
			if(trim($buscador_vta_tributo_ws_fe_param_tipo_tributo_codigo_comparador) == '') $buscador_vta_tributo_ws_fe_param_tipo_tributo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_ws_fe_param_tipo_tributo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_ws_fe_param_tipo_tributo_observacion' type='text' class='textbox' id='buscador_vta_tributo_ws_fe_param_tipo_tributo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_ws_fe_param_tipo_tributo_observacion_comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.observacion');
			if(trim($buscador_vta_tributo_ws_fe_param_tipo_tributo_observacion_comparador) == '') $buscador_vta_tributo_ws_fe_param_tipo_tributo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_ws_fe_param_tipo_tributo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_tributo_ws_fe_param_tipo_tributo_estado_comparador = $criterio->getComparadorDeCampo('vta_tributo_ws_fe_param_tipo_tributo.estado');
			if(trim($buscador_vta_tributo_ws_fe_param_tipo_tributo_estado_comparador) == '') $buscador_vta_tributo_ws_fe_param_tipo_tributo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_ws_fe_param_tipo_tributo_estado_comparador, 'textbox comparador') ?>
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

