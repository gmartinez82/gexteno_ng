<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeTipoFacturaWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->addTabla('pde_tipo_factura_ws_fe_param_tipo_comprobante');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_tipo_factura_ws_fe_param_tipo_comprobante'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_descripcion' type='text' class='textbox' id='buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_descripcion_comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.descripcion');
			if(trim($buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_descripcion_comparador) == '') $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeTipoFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_pde_tipo_factura_id', Gral::getCmbFiltro(PdeTipoFactura::getPdeTipoFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.pde_tipo_factura_id'), 'textbox')?>
        	<?php 
			$buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_pde_tipo_factura_id_comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.pde_tipo_factura_id');
			if(trim($buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_pde_tipo_factura_id_comparador) == '') $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_pde_tipo_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_pde_tipo_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_pde_tipo_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParamTipoComprobante') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id', Gral::getCmbFiltro(WsFeParamTipoComprobante::getWsFeParamTipoComprobantesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id'), 'textbox')?>
        	<?php 
			$buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id_comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id');
			if(trim($buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id_comparador) == '') $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_codigo' type='text' class='textbox' id='buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_codigo_comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.codigo');
			if(trim($buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_codigo_comparador) == '') $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_observacion' type='text' class='textbox' id='buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_observacion_comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.observacion');
			if(trim($buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_observacion_comparador) == '') $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_estado_comparador = $criterio->getComparadorDeCampo('pde_tipo_factura_ws_fe_param_tipo_comprobante.estado');
			if(trim($buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_estado_comparador) == '') $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_estado_comparador, 'textbox comparador') ?>
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

