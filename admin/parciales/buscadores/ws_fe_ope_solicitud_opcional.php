<?php
include_once "_autoload.php";
$criterio = new Criterio(WsFeOpeSolicitudOpcional::SES_CRITERIOS);
$criterio->addTabla('ws_fe_ope_solicitud_opcional');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ws_fe_ope_solicitud_opcional'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_opcional_descripcion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_opcional_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_opcional_descripcion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.descripcion');
			if(trim($buscador_ws_fe_ope_solicitud_opcional_descripcion_comparador) == '') $buscador_ws_fe_ope_solicitud_opcional_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_opcional_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_opcional_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeOpeSolicitud') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_opcional_ws_fe_ope_solicitud_id', Gral::getCmbFiltro(WsFeOpeSolicitud::getWsFeOpeSolicitudsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_ope_solicitud_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_opcional_ws_fe_ope_solicitud_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_ope_solicitud_id');
			if(trim($buscador_ws_fe_ope_solicitud_opcional_ws_fe_ope_solicitud_id_comparador) == '') $buscador_ws_fe_ope_solicitud_opcional_ws_fe_ope_solicitud_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_opcional_ws_fe_ope_solicitud_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_opcional_ws_fe_ope_solicitud_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_codigo' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_afip_codigo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_codigo_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_afip_codigo');
			if(trim($buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_codigo_comparador) == '') $buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Valor') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_valor' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_valor' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_afip_valor')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_valor_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_afip_valor');
			if(trim($buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_valor_comparador) == '') $buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_valor_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_valor_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_valor_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_opcional_codigo' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_opcional_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_opcional_codigo_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.codigo');
			if(trim($buscador_ws_fe_ope_solicitud_opcional_codigo_comparador) == '') $buscador_ws_fe_ope_solicitud_opcional_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_opcional_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_opcional_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_opcional_observacion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_opcional_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_opcional_observacion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.observacion');
			if(trim($buscador_ws_fe_ope_solicitud_opcional_observacion_comparador) == '') $buscador_ws_fe_ope_solicitud_opcional_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_opcional_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_opcional_observacion_comparador, 'textbox comparador') ?>
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

