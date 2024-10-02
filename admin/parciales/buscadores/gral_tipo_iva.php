<?php
include_once "_autoload.php";
$criterio = new Criterio(GralTipoIva::SES_CRITERIOS);
$criterio->addTabla('gral_tipo_iva');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_tipo_iva'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_tipo_iva_descripcion' type='text' class='textbox' id='buscador_gral_tipo_iva_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_tipo_iva_descripcion_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva.descripcion');
			if(trim($buscador_gral_tipo_iva_descripcion_comparador) == '') $buscador_gral_tipo_iva_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_tipo_iva_codigo' type='text' class='textbox' id='buscador_gral_tipo_iva_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_tipo_iva_codigo_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva.codigo');
			if(trim($buscador_gral_tipo_iva_codigo_comparador) == '') $buscador_gral_tipo_iva_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cot Resp Peso') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_tipo_iva_valor_iva' type='text' class='textbox' id='buscador_gral_tipo_iva_valor_iva' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva.valor_iva')) ?>' size='22' />
        	<?php 
			$buscador_gral_tipo_iva_valor_iva_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva.valor_iva');
			if(trim($buscador_gral_tipo_iva_valor_iva_comparador) == '') $buscador_gral_tipo_iva_valor_iva_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_valor_iva_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_valor_iva_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Gravado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_tipo_iva_gravado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva.gravado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_tipo_iva_gravado_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva.gravado');
			if(trim($buscador_gral_tipo_iva_gravado_comparador) == '') $buscador_gral_tipo_iva_gravado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_gravado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_gravado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Para Compra') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_tipo_iva_para_compra', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva.para_compra'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_tipo_iva_para_compra_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva.para_compra');
			if(trim($buscador_gral_tipo_iva_para_compra_comparador) == '') $buscador_gral_tipo_iva_para_compra_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_para_compra_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_para_compra_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Para Venta') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_tipo_iva_para_venta', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva.para_venta'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_tipo_iva_para_venta_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva.para_venta');
			if(trim($buscador_gral_tipo_iva_para_venta_comparador) == '') $buscador_gral_tipo_iva_para_venta_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_para_venta_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_para_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_tipo_iva_observacion' type='text' class='textbox' id='buscador_gral_tipo_iva_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_iva.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_tipo_iva_observacion_comparador = $criterio->getComparadorDeCampo('gral_tipo_iva.observacion');
			if(trim($buscador_gral_tipo_iva_observacion_comparador) == '') $buscador_gral_tipo_iva_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_iva_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_iva_observacion_comparador, 'textbox comparador') ?>
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

