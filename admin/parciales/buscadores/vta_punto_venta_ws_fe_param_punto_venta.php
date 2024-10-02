<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPuntoVentaWsFeParamPuntoVenta::SES_CRITERIOS);
$criterio->addTabla('vta_punto_venta_ws_fe_param_punto_venta');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_punto_venta_ws_fe_param_punto_venta'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_punto_venta_ws_fe_param_punto_venta_descripcion' type='text' class='textbox' id='buscador_vta_punto_venta_ws_fe_param_punto_venta_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_punto_venta_ws_fe_param_punto_venta_descripcion_comparador = $criterio->getComparadorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.descripcion');
			if(trim($buscador_vta_punto_venta_ws_fe_param_punto_venta_descripcion_comparador) == '') $buscador_vta_punto_venta_ws_fe_param_punto_venta_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_ws_fe_param_punto_venta_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_ws_fe_param_punto_venta_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPuntoVenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_punto_venta_ws_fe_param_punto_venta_vta_punto_venta_id', Gral::getCmbFiltro(VtaPuntoVenta::getVtaPuntoVentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.vta_punto_venta_id'), 'textbox')?>
        	<?php 
			$buscador_vta_punto_venta_ws_fe_param_punto_venta_vta_punto_venta_id_comparador = $criterio->getComparadorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.vta_punto_venta_id');
			if(trim($buscador_vta_punto_venta_ws_fe_param_punto_venta_vta_punto_venta_id_comparador) == '') $buscador_vta_punto_venta_ws_fe_param_punto_venta_vta_punto_venta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_ws_fe_param_punto_venta_vta_punto_venta_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_ws_fe_param_punto_venta_vta_punto_venta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('WsFeParamPuntoVenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_punto_venta_ws_fe_param_punto_venta_ws_fe_param_punto_venta_id', Gral::getCmbFiltro(WsFeParamPuntoVenta::getWsFeParamPuntoVentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.ws_fe_param_punto_venta_id'), 'textbox')?>
        	<?php 
			$buscador_vta_punto_venta_ws_fe_param_punto_venta_ws_fe_param_punto_venta_id_comparador = $criterio->getComparadorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.ws_fe_param_punto_venta_id');
			if(trim($buscador_vta_punto_venta_ws_fe_param_punto_venta_ws_fe_param_punto_venta_id_comparador) == '') $buscador_vta_punto_venta_ws_fe_param_punto_venta_ws_fe_param_punto_venta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_ws_fe_param_punto_venta_ws_fe_param_punto_venta_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_ws_fe_param_punto_venta_ws_fe_param_punto_venta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_punto_venta_ws_fe_param_punto_venta_codigo' type='text' class='textbox' id='buscador_vta_punto_venta_ws_fe_param_punto_venta_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_punto_venta_ws_fe_param_punto_venta_codigo_comparador = $criterio->getComparadorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.codigo');
			if(trim($buscador_vta_punto_venta_ws_fe_param_punto_venta_codigo_comparador) == '') $buscador_vta_punto_venta_ws_fe_param_punto_venta_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_ws_fe_param_punto_venta_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_ws_fe_param_punto_venta_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_punto_venta_ws_fe_param_punto_venta_observacion' type='text' class='textbox' id='buscador_vta_punto_venta_ws_fe_param_punto_venta_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_punto_venta_ws_fe_param_punto_venta_observacion_comparador = $criterio->getComparadorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.observacion');
			if(trim($buscador_vta_punto_venta_ws_fe_param_punto_venta_observacion_comparador) == '') $buscador_vta_punto_venta_ws_fe_param_punto_venta_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_ws_fe_param_punto_venta_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_ws_fe_param_punto_venta_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_punto_venta_ws_fe_param_punto_venta_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_punto_venta_ws_fe_param_punto_venta_estado_comparador = $criterio->getComparadorDeCampo('vta_punto_venta_ws_fe_param_punto_venta.estado');
			if(trim($buscador_vta_punto_venta_ws_fe_param_punto_venta_estado_comparador) == '') $buscador_vta_punto_venta_ws_fe_param_punto_venta_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_ws_fe_param_punto_venta_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_ws_fe_param_punto_venta_estado_comparador, 'textbox comparador') ?>
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

