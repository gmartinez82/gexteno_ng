<?php
include_once "_autoload.php";
$criterio = new Criterio(GralCondicionIvaVtaTipoRecibo::SES_CRITERIOS);
$criterio->addTabla('gral_condicion_iva_vta_tipo_recibo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_condicion_iva_vta_tipo_recibo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_condicion_iva_vta_tipo_recibo_descripcion' type='text' class='textbox' id='buscador_gral_condicion_iva_vta_tipo_recibo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_condicion_iva_vta_tipo_recibo_descripcion_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.descripcion');
			if(trim($buscador_gral_condicion_iva_vta_tipo_recibo_descripcion_comparador) == '') $buscador_gral_condicion_iva_vta_tipo_recibo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_vta_tipo_recibo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.gral_condicion_iva_id'), 'textbox')?>
        	<?php 
			$buscador_gral_condicion_iva_vta_tipo_recibo_gral_condicion_iva_id_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.gral_condicion_iva_id');
			if(trim($buscador_gral_condicion_iva_vta_tipo_recibo_gral_condicion_iva_id_comparador) == '') $buscador_gral_condicion_iva_vta_tipo_recibo_gral_condicion_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_gral_condicion_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_vta_tipo_recibo_gral_condicion_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaTipoRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_vta_tipo_recibo_id', Gral::getCmbFiltro(VtaTipoRecibo::getVtaTipoRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.vta_tipo_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_gral_condicion_iva_vta_tipo_recibo_vta_tipo_recibo_id_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.vta_tipo_recibo_id');
			if(trim($buscador_gral_condicion_iva_vta_tipo_recibo_vta_tipo_recibo_id_comparador) == '') $buscador_gral_condicion_iva_vta_tipo_recibo_vta_tipo_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_vta_tipo_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_vta_tipo_recibo_vta_tipo_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_condicion_iva_vta_tipo_recibo_codigo' type='text' class='textbox' id='buscador_gral_condicion_iva_vta_tipo_recibo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_condicion_iva_vta_tipo_recibo_codigo_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.codigo');
			if(trim($buscador_gral_condicion_iva_vta_tipo_recibo_codigo_comparador) == '') $buscador_gral_condicion_iva_vta_tipo_recibo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_vta_tipo_recibo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_condicion_iva_vta_tipo_recibo_observacion' type='text' class='textbox' id='buscador_gral_condicion_iva_vta_tipo_recibo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_condicion_iva_vta_tipo_recibo_observacion_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.observacion');
			if(trim($buscador_gral_condicion_iva_vta_tipo_recibo_observacion_comparador) == '') $buscador_gral_condicion_iva_vta_tipo_recibo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_vta_tipo_recibo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_condicion_iva_vta_tipo_recibo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_condicion_iva_vta_tipo_recibo_estado_comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_vta_tipo_recibo.estado');
			if(trim($buscador_gral_condicion_iva_vta_tipo_recibo_estado_comparador) == '') $buscador_gral_condicion_iva_vta_tipo_recibo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_condicion_iva_vta_tipo_recibo_estado_comparador, 'textbox comparador') ?>
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

