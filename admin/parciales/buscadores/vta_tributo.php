<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaTributo::SES_CRITERIOS);
$criterio->addTabla('vta_tributo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_tributo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_descripcion' type='text' class='textbox' id='buscador_vta_tributo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_descripcion_comparador = $criterio->getComparadorDeCampo('vta_tributo.descripcion');
			if(trim($buscador_vta_tributo_descripcion_comparador) == '') $buscador_vta_tributo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Alicuota Porcentual') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_alicuota_porcentual' type='text' class='textbox' id='buscador_vta_tributo_alicuota_porcentual' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo.alicuota_porcentual')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_alicuota_porcentual_comparador = $criterio->getComparadorDeCampo('vta_tributo.alicuota_porcentual');
			if(trim($buscador_vta_tributo_alicuota_porcentual_comparador) == '') $buscador_vta_tributo_alicuota_porcentual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_alicuota_porcentual_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_alicuota_porcentual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Alicuota Decimal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_alicuota_decimal' type='text' class='textbox' id='buscador_vta_tributo_alicuota_decimal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo.alicuota_decimal')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_alicuota_decimal_comparador = $criterio->getComparadorDeCampo('vta_tributo.alicuota_decimal');
			if(trim($buscador_vta_tributo_alicuota_decimal_comparador) == '') $buscador_vta_tributo_alicuota_decimal_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_alicuota_decimal_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_alicuota_decimal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Formula') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_formula' type='text' class='textbox' id='buscador_vta_tributo_formula' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo.formula')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_formula_comparador = $criterio->getComparadorDeCampo('vta_tributo.formula');
			if(trim($buscador_vta_tributo_formula_comparador) == '') $buscador_vta_tributo_formula_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_formula_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_formula_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbCuenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_tributo_cntb_cuenta_id', Gral::getCmbFiltro(CntbCuenta::getCntbCuentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo.cntb_cuenta_id'), 'textbox')?>
        	<?php 
			$buscador_vta_tributo_cntb_cuenta_id_comparador = $criterio->getComparadorDeCampo('vta_tributo.cntb_cuenta_id');
			if(trim($buscador_vta_tributo_cntb_cuenta_id_comparador) == '') $buscador_vta_tributo_cntb_cuenta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_cntb_cuenta_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_cntb_cuenta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_codigo' type='text' class='textbox' id='buscador_vta_tributo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_codigo_comparador = $criterio->getComparadorDeCampo('vta_tributo.codigo');
			if(trim($buscador_vta_tributo_codigo_comparador) == '') $buscador_vta_tributo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_tributo_observacion' type='text' class='textbox' id='buscador_vta_tributo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_tributo_observacion_comparador = $criterio->getComparadorDeCampo('vta_tributo.observacion');
			if(trim($buscador_vta_tributo_observacion_comparador) == '') $buscador_vta_tributo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_tributo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_tributo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_tributo_estado_comparador = $criterio->getComparadorDeCampo('vta_tributo.estado');
			if(trim($buscador_vta_tributo_estado_comparador) == '') $buscador_vta_tributo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_tributo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_tributo_estado_comparador, 'textbox comparador') ?>
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

