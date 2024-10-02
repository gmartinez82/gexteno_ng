<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaTipoNotaCreditoWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->addTabla('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_tipo_nota_credito_ws_fe_param_tipo_comprobante'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_descripcion' type='text' class='textbox' id='buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_descripcion_comparador = $criterio->getComparadorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.descripcion');
			if(trim($buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_descripcion_comparador) == '') $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaTipoNotaCredito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_vta_tipo_nota_credito_id', Gral::getCmbFiltro(VtaTipoNotaCredito::getVtaTipoNotaCreditosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.vta_tipo_nota_credito_id'), 'textbox')?>
        	<?php 
			$buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_vta_tipo_nota_credito_id_comparador = $criterio->getComparadorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.vta_tipo_nota_credito_id');
			if(trim($buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_vta_tipo_nota_credito_id_comparador) == '') $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_vta_tipo_nota_credito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_vta_tipo_nota_credito_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_vta_tipo_nota_credito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParamTipoComprobante') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id', Gral::getCmbFiltro(WsFeParamTipoComprobante::getWsFeParamTipoComprobantesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id'), 'textbox')?>
        	<?php 
			$buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id_comparador = $criterio->getComparadorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id');
			if(trim($buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id_comparador) == '') $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_codigo' type='text' class='textbox' id='buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_codigo_comparador = $criterio->getComparadorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.codigo');
			if(trim($buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_codigo_comparador) == '') $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_observacion' type='text' class='textbox' id='buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_observacion_comparador = $criterio->getComparadorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.observacion');
			if(trim($buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_observacion_comparador) == '') $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_estado_comparador = $criterio->getComparadorDeCampo('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.estado');
			if(trim($buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_estado_comparador) == '') $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_estado_comparador, 'textbox comparador') ?>
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

