<?php
include_once "_autoload.php";
$criterio = new Criterio(WsFeOpeSolicitudComprobanteAsociado::SES_CRITERIOS);
$criterio->addTabla('ws_fe_ope_solicitud_comprobante_asociado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ws_fe_ope_solicitud_comprobante_asociado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_comprobante_asociado_descripcion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_comprobante_asociado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_comprobante_asociado_descripcion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.descripcion');
			if(trim($buscador_ws_fe_ope_solicitud_comprobante_asociado_descripcion_comparador) == '') $buscador_ws_fe_ope_solicitud_comprobante_asociado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_comprobante_asociado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeOpeSolicitud') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_ope_solicitud_id', Gral::getCmbFiltro(WsFeOpeSolicitud::getWsFeOpeSolicitudsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_ope_solicitud_id'), 'textbox')?>
        	<?php 
			$buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_ope_solicitud_id_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_ope_solicitud_id');
			if(trim($buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_ope_solicitud_id_comparador) == '') $buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_ope_solicitud_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_ope_solicitud_id_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_ope_solicitud_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo de Comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_tipo_comprobante' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_tipo_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_tipo_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_tipo_comprobante_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_tipo_comprobante');
			if(trim($buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_tipo_comprobante_comparador) == '') $buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_tipo_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_tipo_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_tipo_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Punto de Venta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_punto_venta' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_punto_venta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_punto_venta')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_punto_venta_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_punto_venta');
			if(trim($buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_punto_venta_comparador) == '') $buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_punto_venta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_punto_venta_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_punto_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_numero' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_numero' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_numero')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_numero_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_numero');
			if(trim($buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_numero_comparador) == '') $buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_numero_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_numero_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_numero_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cuit') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_cuit' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_cuit' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_cuit')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_cuit_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_cuit');
			if(trim($buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_cuit_comparador) == '') $buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_cuit_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_cuit_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_cuit_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_comprobante_asociado_codigo' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_comprobante_asociado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_comprobante_asociado_codigo_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.codigo');
			if(trim($buscador_ws_fe_ope_solicitud_comprobante_asociado_codigo_comparador) == '') $buscador_ws_fe_ope_solicitud_comprobante_asociado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_comprobante_asociado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ws_fe_ope_solicitud_comprobante_asociado_observacion' type='text' class='textbox' id='buscador_ws_fe_ope_solicitud_comprobante_asociado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ws_fe_ope_solicitud_comprobante_asociado_observacion_comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_comprobante_asociado.observacion');
			if(trim($buscador_ws_fe_ope_solicitud_comprobante_asociado_observacion_comparador) == '') $buscador_ws_fe_ope_solicitud_comprobante_asociado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ws_fe_ope_solicitud_comprobante_asociado_observacion_comparador, 'textbox comparador') ?>
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

