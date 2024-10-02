<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaVendedorDescuento::SES_CRITERIOS);
$criterio->addTabla('vta_vendedor_descuento');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_vendedor_descuento'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_descuento_descripcion' type='text' class='textbox' id='buscador_vta_vendedor_descuento_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_descuento.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_descuento_descripcion_comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.descripcion');
			if(trim($buscador_vta_vendedor_descuento_descripcion_comparador) == '') $buscador_vta_vendedor_descuento_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_descuento_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_descuento_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaVendedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_vendedor_descuento_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_descuento.vta_vendedor_id'), 'textbox')?>
        	<?php 
			$buscador_vta_vendedor_descuento_vta_vendedor_id_comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.vta_vendedor_id');
			if(trim($buscador_vta_vendedor_descuento_vta_vendedor_id_comparador) == '') $buscador_vta_vendedor_descuento_vta_vendedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_descuento_vta_vendedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_descuento_vta_vendedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsEtiqueta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_vendedor_descuento_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_descuento.ins_etiqueta_id'), 'textbox')?>
        	<?php 
			$buscador_vta_vendedor_descuento_ins_etiqueta_id_comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.ins_etiqueta_id');
			if(trim($buscador_vta_vendedor_descuento_ins_etiqueta_id_comparador) == '') $buscador_vta_vendedor_descuento_ins_etiqueta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_descuento_ins_etiqueta_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_descuento_ins_etiqueta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descuento Maximo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_descuento_descuento_maximo' type='text' class='textbox' id='buscador_vta_vendedor_descuento_descuento_maximo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_descuento.descuento_maximo')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_descuento_descuento_maximo_comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.descuento_maximo');
			if(trim($buscador_vta_vendedor_descuento_descuento_maximo_comparador) == '') $buscador_vta_vendedor_descuento_descuento_maximo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_descuento_descuento_maximo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_descuento_descuento_maximo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_descuento_codigo' type='text' class='textbox' id='buscador_vta_vendedor_descuento_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_descuento.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_descuento_codigo_comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.codigo');
			if(trim($buscador_vta_vendedor_descuento_codigo_comparador) == '') $buscador_vta_vendedor_descuento_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_descuento_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_descuento_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_vendedor_descuento_observacion' type='text' class='textbox' id='buscador_vta_vendedor_descuento_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor_descuento.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_vendedor_descuento_observacion_comparador = $criterio->getComparadorDeCampo('vta_vendedor_descuento.observacion');
			if(trim($buscador_vta_vendedor_descuento_observacion_comparador) == '') $buscador_vta_vendedor_descuento_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_vendedor_descuento_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_vendedor_descuento_observacion_comparador, 'textbox comparador') ?>
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

