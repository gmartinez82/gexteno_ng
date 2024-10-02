<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvDescuentoFinanciero::SES_CRITERIOS);
$criterio->addTabla('prv_descuento_financiero');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_descuento_financiero'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_descuento_financiero_descripcion' type='text' class='textbox' id='buscador_prv_descuento_financiero_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_descuento_financiero.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_prv_descuento_financiero_descripcion_comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.descripcion');
			if(trim($buscador_prv_descuento_financiero_descripcion_comparador) == '') $buscador_prv_descuento_financiero_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_descuento_financiero_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_descuento_financiero_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_descuento_financiero_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_descuento_financiero.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_prv_descuento_financiero_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.prv_proveedor_id');
			if(trim($buscador_prv_descuento_financiero_prv_proveedor_id_comparador) == '') $buscador_prv_descuento_financiero_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_descuento_financiero_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_descuento_financiero_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_descuento_financiero_codigo' type='text' class='textbox' id='buscador_prv_descuento_financiero_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_descuento_financiero.codigo')) ?>' size='22' />
        	<?php 
			$buscador_prv_descuento_financiero_codigo_comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.codigo');
			if(trim($buscador_prv_descuento_financiero_codigo_comparador) == '') $buscador_prv_descuento_financiero_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_descuento_financiero_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_prv_descuento_financiero_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Porc Descuento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_descuento_financiero_porcentaje_descuento' type='text' class='textbox' id='buscador_prv_descuento_financiero_porcentaje_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_descuento_financiero.porcentaje_descuento')) ?>' size='22' />
        	<?php 
			$buscador_prv_descuento_financiero_porcentaje_descuento_comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.porcentaje_descuento');
			if(trim($buscador_prv_descuento_financiero_porcentaje_descuento_comparador) == '') $buscador_prv_descuento_financiero_porcentaje_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_descuento_financiero_porcentaje_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_prv_descuento_financiero_porcentaje_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_descuento_financiero_observacion' type='text' class='textbox' id='buscador_prv_descuento_financiero_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_descuento_financiero.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_descuento_financiero_observacion_comparador = $criterio->getComparadorDeCampo('prv_descuento_financiero.observacion');
			if(trim($buscador_prv_descuento_financiero_observacion_comparador) == '') $buscador_prv_descuento_financiero_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_descuento_financiero_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_descuento_financiero_observacion_comparador, 'textbox comparador') ?>
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

