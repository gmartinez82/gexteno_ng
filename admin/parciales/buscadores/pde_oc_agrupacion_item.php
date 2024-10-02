<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeOcAgrupacionItem::SES_CRITERIOS);
$criterio->addTabla('pde_oc_agrupacion_item');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_oc_agrupacion_item'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_item_descripcion' type='text' class='textbox' id='buscador_pde_oc_agrupacion_item_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_agrupacion_item_descripcion_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.descripcion');
			if(trim($buscador_pde_oc_agrupacion_item_descripcion_comparador) == '') $buscador_pde_oc_agrupacion_item_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_item_codigo' type='text' class='textbox' id='buscador_pde_oc_agrupacion_item_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_agrupacion_item_codigo_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.codigo');
			if(trim($buscador_pde_oc_agrupacion_item_codigo_comparador) == '') $buscador_pde_oc_agrupacion_item_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOcAgrupacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_pde_oc_agrupacion_id', Gral::getCmbFiltro(PdeOcAgrupacion::getPdeOcAgrupacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.pde_oc_agrupacion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_item_pde_oc_agrupacion_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.pde_oc_agrupacion_id');
			if(trim($buscador_pde_oc_agrupacion_item_pde_oc_agrupacion_id_comparador) == '') $buscador_pde_oc_agrupacion_item_pde_oc_agrupacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_pde_oc_agrupacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_pde_oc_agrupacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_item_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.ins_insumo_id');
			if(trim($buscador_pde_oc_agrupacion_item_ins_insumo_id_comparador) == '') $buscador_pde_oc_agrupacion_item_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_item_cantidad' type='text' class='textbox' id='buscador_pde_oc_agrupacion_item_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_agrupacion_item_cantidad_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.cantidad');
			if(trim($buscador_pde_oc_agrupacion_item_cantidad_comparador) == '') $buscador_pde_oc_agrupacion_item_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_prv_insumo_id', Gral::getCmbFiltro(PrvInsumo::getPrvInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_item_prv_insumo_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.prv_insumo_id');
			if(trim($buscador_pde_oc_agrupacion_item_prv_insumo_id_comparador) == '') $buscador_pde_oc_agrupacion_item_prv_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_prv_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_prv_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvInsumoCosto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_prv_insumo_costo_id', Gral::getCmbFiltro(PrvInsumoCosto::getPrvInsumoCostosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_insumo_costo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_item_prv_insumo_costo_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.prv_insumo_costo_id');
			if(trim($buscador_pde_oc_agrupacion_item_prv_insumo_costo_id_comparador) == '') $buscador_pde_oc_agrupacion_item_prv_insumo_costo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_prv_insumo_costo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_prv_insumo_costo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Esperado') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_item_importe_esperado' type='text' class='textbox' id='buscador_pde_oc_agrupacion_item_importe_esperado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.importe_esperado')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_agrupacion_item_importe_esperado_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.importe_esperado');
			if(trim($buscador_pde_oc_agrupacion_item_importe_esperado_comparador) == '') $buscador_pde_oc_agrupacion_item_importe_esperado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_importe_esperado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_importe_esperado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Afecta Costo') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_afecta_costo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.afecta_costo'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_oc_agrupacion_item_afecta_costo_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.afecta_costo');
			if(trim($buscador_pde_oc_agrupacion_item_afecta_costo_comparador) == '') $buscador_pde_oc_agrupacion_item_afecta_costo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_afecta_costo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_afecta_costo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvDescuentoFinanciero') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_prv_descuento_financiero_id', Gral::getCmbFiltro(PrvDescuentoFinanciero::getPrvDescuentoFinancierosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_descuento_financiero_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_item_prv_descuento_financiero_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.prv_descuento_financiero_id');
			if(trim($buscador_pde_oc_agrupacion_item_prv_descuento_financiero_id_comparador) == '') $buscador_pde_oc_agrupacion_item_prv_descuento_financiero_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_prv_descuento_financiero_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_prv_descuento_financiero_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvDescuentoComercial') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_prv_descuento_comercial_id', Gral::getCmbFiltro(PrvDescuentoComercial::getPrvDescuentoComercialsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.prv_descuento_comercial_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_item_prv_descuento_comercial_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.prv_descuento_comercial_id');
			if(trim($buscador_pde_oc_agrupacion_item_prv_descuento_comercial_id_comparador) == '') $buscador_pde_oc_agrupacion_item_prv_descuento_comercial_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_prv_descuento_comercial_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_prv_descuento_comercial_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_item_observacion' type='text' class='textbox' id='buscador_pde_oc_agrupacion_item_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_item.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_agrupacion_item_observacion_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_item.observacion');
			if(trim($buscador_pde_oc_agrupacion_item_observacion_comparador) == '') $buscador_pde_oc_agrupacion_item_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_item_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_item_observacion_comparador, 'textbox comparador') ?>
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

