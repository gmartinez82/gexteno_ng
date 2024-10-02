<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaFacturaVtaTributo::SES_CRITERIOS);
$criterio->addTabla('vta_factura_vta_tributo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_factura_vta_tributo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_vta_tributo_descripcion' type='text' class='textbox' id='buscador_vta_factura_vta_tributo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_vta_tributo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_vta_tributo_descripcion_comparador = $criterio->getComparadorDeCampo('vta_factura_vta_tributo.descripcion');
			if(trim($buscador_vta_factura_vta_tributo_descripcion_comparador) == '') $buscador_vta_factura_vta_tributo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tributo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_vta_factura_id', Gral::getCmbFiltro(VtaFactura::getVtaFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_vta_tributo.vta_factura_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_vta_tributo_vta_factura_id_comparador = $criterio->getComparadorDeCampo('vta_factura_vta_tributo.vta_factura_id');
			if(trim($buscador_vta_factura_vta_tributo_vta_factura_id_comparador) == '') $buscador_vta_factura_vta_tributo_vta_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_vta_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tributo_vta_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaTributo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_vta_tributo_id', Gral::getCmbFiltro(VtaTributo::getVtaTributosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_vta_tributo.vta_tributo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_factura_vta_tributo_vta_tributo_id_comparador = $criterio->getComparadorDeCampo('vta_factura_vta_tributo.vta_tributo_id');
			if(trim($buscador_vta_factura_vta_tributo_vta_tributo_id_comparador) == '') $buscador_vta_factura_vta_tributo_vta_tributo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_vta_tributo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tributo_vta_tributo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Imp Imponible') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_vta_tributo_importe_imponible' type='text' class='textbox' id='buscador_vta_factura_vta_tributo_importe_imponible' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_vta_tributo.importe_imponible')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_vta_tributo_importe_imponible_comparador = $criterio->getComparadorDeCampo('vta_factura_vta_tributo.importe_imponible');
			if(trim($buscador_vta_factura_vta_tributo_importe_imponible_comparador) == '') $buscador_vta_factura_vta_tributo_importe_imponible_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_importe_imponible_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tributo_importe_imponible_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Imp Tributo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_vta_tributo_importe_tributo' type='text' class='textbox' id='buscador_vta_factura_vta_tributo_importe_tributo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_vta_tributo.importe_tributo')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_vta_tributo_importe_tributo_comparador = $criterio->getComparadorDeCampo('vta_factura_vta_tributo.importe_tributo');
			if(trim($buscador_vta_factura_vta_tributo_importe_tributo_comparador) == '') $buscador_vta_factura_vta_tributo_importe_tributo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_importe_tributo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tributo_importe_tributo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Alicuota Porcentual') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_vta_tributo_alicuota_porcentual' type='text' class='textbox' id='buscador_vta_factura_vta_tributo_alicuota_porcentual' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_vta_tributo.alicuota_porcentual')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_vta_tributo_alicuota_porcentual_comparador = $criterio->getComparadorDeCampo('vta_factura_vta_tributo.alicuota_porcentual');
			if(trim($buscador_vta_factura_vta_tributo_alicuota_porcentual_comparador) == '') $buscador_vta_factura_vta_tributo_alicuota_porcentual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_alicuota_porcentual_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tributo_alicuota_porcentual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Alicuota Decimal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_vta_tributo_alicuota_decimal' type='text' class='textbox' id='buscador_vta_factura_vta_tributo_alicuota_decimal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_vta_tributo.alicuota_decimal')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_vta_tributo_alicuota_decimal_comparador = $criterio->getComparadorDeCampo('vta_factura_vta_tributo.alicuota_decimal');
			if(trim($buscador_vta_factura_vta_tributo_alicuota_decimal_comparador) == '') $buscador_vta_factura_vta_tributo_alicuota_decimal_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_alicuota_decimal_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tributo_alicuota_decimal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_vta_tributo_codigo' type='text' class='textbox' id='buscador_vta_factura_vta_tributo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_vta_tributo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_vta_tributo_codigo_comparador = $criterio->getComparadorDeCampo('vta_factura_vta_tributo.codigo');
			if(trim($buscador_vta_factura_vta_tributo_codigo_comparador) == '') $buscador_vta_factura_vta_tributo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tributo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_vta_tributo_observacion' type='text' class='textbox' id='buscador_vta_factura_vta_tributo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_vta_tributo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_vta_tributo_observacion_comparador = $criterio->getComparadorDeCampo('vta_factura_vta_tributo.observacion');
			if(trim($buscador_vta_factura_vta_tributo_observacion_comparador) == '') $buscador_vta_factura_vta_tributo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tributo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_vta_tributo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_factura_vta_tributo_estado_comparador = $criterio->getComparadorDeCampo('vta_factura_vta_tributo.estado');
			if(trim($buscador_vta_factura_vta_tributo_estado_comparador) == '') $buscador_vta_factura_vta_tributo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_vta_tributo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_vta_tributo_estado_comparador, 'textbox comparador') ?>
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

