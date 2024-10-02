<?php
include_once "_autoload.php";
$criterio = new Criterio(WsFeOpeSolicitudTributo::SES_CRITERIOS);
$criterio->addTabla('ws_fe_ope_solicitud_tributo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ws_fe_ope_solicitud_tributo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_tributo_descripcion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_tributo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_tributo_descripcion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.descripcion');
			if(trim($buscador_ws_fe_ope_solicitud_tributo_descripcion_comparador) == '') $buscador_ws_fe_ope_solicitud_tributo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_tributo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeOpeSolicitud') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_ope_solicitud_id', Gral::getCmbFiltro(WsFeOpeSolicitud::getWsFeOpeSolicitudsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_ope_solicitud_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_tributo_ws_fe_ope_solicitud_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_ope_solicitud_id');
			if(trim($buscador_ws_fe_ope_solicitud_tributo_ws_fe_ope_solicitud_id_comparador) == '') $buscador_ws_fe_ope_solicitud_tributo_ws_fe_ope_solicitud_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_ope_solicitud_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_tributo_ws_fe_ope_solicitud_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParamTipoTributo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_param_tipo_tributo_id', Gral::getCmbFiltro(WsFeParamTipoTributo::getWsFeParamTipoTributosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_param_tipo_tributo_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_tributo_ws_fe_param_tipo_tributo_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_param_tipo_tributo_id');
			if(trim($buscador_ws_fe_ope_solicitud_tributo_ws_fe_param_tipo_tributo_id_comparador) == '') $buscador_ws_fe_ope_solicitud_tributo_ws_fe_param_tipo_tributo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_param_tipo_tributo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_tributo_ws_fe_param_tipo_tributo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_codigo' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_codigo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_codigo_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_codigo');
			if(trim($buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_codigo_comparador) == '') $buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_descripcion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_descripcion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_descripcion');
			if(trim($buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_descripcion_comparador) == '') $buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Base Imponible') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_base_imponible' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_base_imponible' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_base_imponible')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_base_imponible_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_base_imponible');
			if(trim($buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_base_imponible_comparador) == '') $buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_base_imponible_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_base_imponible_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_base_imponible_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Alicuota') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_alicuota' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_alicuota' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_alicuota')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_alicuota_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_alicuota');
			if(trim($buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_alicuota_comparador) == '') $buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_alicuota_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_alicuota_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_alicuota_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_importe' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_importe' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_importe')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_importe_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.ws_fe_afip_importe');
			if(trim($buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_importe_comparador) == '') $buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_importe_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_importe_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_importe_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_tributo_codigo' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_tributo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_tributo_codigo_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.codigo');
			if(trim($buscador_ws_fe_ope_solicitud_tributo_codigo_comparador) == '') $buscador_ws_fe_ope_solicitud_tributo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_tributo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_tributo_observacion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_tributo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_tributo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_tributo_observacion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_tributo.observacion');
			if(trim($buscador_ws_fe_ope_solicitud_tributo_observacion_comparador) == '') $buscador_ws_fe_ope_solicitud_tributo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_tributo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_tributo_observacion_comparador, 'textbox comparador') ?>
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

