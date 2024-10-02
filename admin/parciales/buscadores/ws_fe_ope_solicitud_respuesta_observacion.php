<?php
include_once "_autoload.php";
$criterio = new Criterio(WsFeOpeSolicitudRespuestaObservacion::SES_CRITERIOS);
$criterio->addTabla('ws_fe_ope_solicitud_respuesta_observacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ws_fe_ope_solicitud_respuesta_observacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_observacion_descripcion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_observacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_observacion_descripcion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.descripcion');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_observacion_descripcion_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_observacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_observacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_ope_solicitud_respuesta_id', Gral::getCmbFiltro(WsFeOpeSolicitudRespuesta::getWsFeOpeSolicitudRespuestasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_ope_solicitud_respuesta_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_ope_solicitud_respuesta_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_ope_solicitud_respuesta_id');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_ope_solicitud_respuesta_id_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_ope_solicitud_respuesta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_ope_solicitud_respuesta_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_ope_solicitud_respuesta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_codigo' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_codigo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_codigo_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_codigo');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_codigo_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Mensaje') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_mensaje' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_mensaje' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_mensaje')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_mensaje_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_mensaje');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_mensaje_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_mensaje_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_mensaje_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_mensaje_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_observacion_codigo' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_observacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_observacion_codigo_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.codigo');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_observacion_codigo_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_observacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_observacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_respuesta_observacion_observacion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_respuesta_observacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_respuesta_observacion_observacion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_respuesta_observacion.observacion');
			if(trim($buscador_ws_fe_ope_solicitud_respuesta_observacion_observacion_comparador) == '') $buscador_ws_fe_ope_solicitud_respuesta_observacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_respuesta_observacion_observacion_comparador, 'textbox comparador') ?>
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

