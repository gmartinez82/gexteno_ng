<?php
include_once "_autoload.php";
$criterio = new Criterio(WsFeOpeSolicitudIva::SES_CRITERIOS);
$criterio->addTabla('ws_fe_ope_solicitud_iva');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ws_fe_ope_solicitud_iva'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_iva_descripcion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_iva_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_iva_descripcion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.descripcion');
			if(trim($buscador_ws_fe_ope_solicitud_iva_descripcion_comparador) == '') $buscador_ws_fe_ope_solicitud_iva_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_iva_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_iva_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeOpeSolicitud') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_ope_solicitud_id', Gral::getCmbFiltro(WsFeOpeSolicitud::getWsFeOpeSolicitudsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_ope_solicitud_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_iva_ws_fe_ope_solicitud_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_ope_solicitud_id');
			if(trim($buscador_ws_fe_ope_solicitud_iva_ws_fe_ope_solicitud_id_comparador) == '') $buscador_ws_fe_ope_solicitud_iva_ws_fe_ope_solicitud_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_ope_solicitud_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_iva_ws_fe_ope_solicitud_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParamTipoIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_param_tipo_iva_id', Gral::getCmbFiltro(WsFeParamTipoIva::getWsFeParamTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_param_tipo_iva_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_iva_ws_fe_param_tipo_iva_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_param_tipo_iva_id');
			if(trim($buscador_ws_fe_ope_solicitud_iva_ws_fe_param_tipo_iva_id_comparador) == '') $buscador_ws_fe_ope_solicitud_iva_ws_fe_param_tipo_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_param_tipo_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_iva_ws_fe_param_tipo_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_codigo' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_codigo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_codigo_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_codigo');
			if(trim($buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_codigo_comparador) == '') $buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Base Imponible') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_base_imponible' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_base_imponible' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_base_imponible')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_base_imponible_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_base_imponible');
			if(trim($buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_base_imponible_comparador) == '') $buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_base_imponible_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_base_imponible_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_base_imponible_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_importe' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_importe' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_importe')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_importe_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.ws_fe_afip_importe');
			if(trim($buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_importe_comparador) == '') $buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_importe_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_importe_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_importe_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_iva_codigo' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_iva_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_iva_codigo_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.codigo');
			if(trim($buscador_ws_fe_ope_solicitud_iva_codigo_comparador) == '') $buscador_ws_fe_ope_solicitud_iva_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_iva_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_iva_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_iva_observacion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_iva_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_iva.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_iva_observacion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_iva.observacion');
			if(trim($buscador_ws_fe_ope_solicitud_iva_observacion_comparador) == '') $buscador_ws_fe_ope_solicitud_iva_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_iva_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_iva_observacion_comparador, 'textbox comparador') ?>
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

