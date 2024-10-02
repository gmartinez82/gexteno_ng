<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeFacturaPdeOc::SES_CRITERIOS);
$criterio->addTabla('pde_factura_pde_oc');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_factura_pde_oc'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_oc_descripcion' type='text' class='textbox' id='buscador_pde_factura_pde_oc_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_oc_descripcion_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.descripcion');
			if(trim($buscador_pde_factura_pde_oc_descripcion_comparador) == '') $buscador_pde_factura_pde_oc_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_pde_factura_id', Gral::getCmbFiltro(PdeFactura::getPdeFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.pde_factura_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_oc_pde_factura_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.pde_factura_id');
			if(trim($buscador_pde_factura_pde_oc_pde_factura_id_comparador) == '') $buscador_pde_factura_pde_oc_pde_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_pde_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_pde_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOc') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_pde_oc_id', Gral::getCmbFiltro(PdeOc::getPdeOcsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.pde_oc_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_oc_pde_oc_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.pde_oc_id');
			if(trim($buscador_pde_factura_pde_oc_pde_oc_id_comparador) == '') $buscador_pde_factura_pde_oc_pde_oc_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_pde_oc_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_pde_oc_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_oc_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.ins_insumo_id');
			if(trim($buscador_pde_factura_pde_oc_ins_insumo_id_comparador) == '') $buscador_pde_factura_pde_oc_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsUnidadMedida') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_ins_unidad_medida_id', Gral::getCmbFiltro(InsUnidadMedida::getInsUnidadMedidasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.ins_unidad_medida_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_oc_ins_unidad_medida_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.ins_unidad_medida_id');
			if(trim($buscador_pde_factura_pde_oc_ins_unidad_medida_id_comparador) == '') $buscador_pde_factura_pde_oc_ins_unidad_medida_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_ins_unidad_medida_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_ins_unidad_medida_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.gral_tipo_iva_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_oc_gral_tipo_iva_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.gral_tipo_iva_id');
			if(trim($buscador_pde_factura_pde_oc_gral_tipo_iva_id_comparador) == '') $buscador_pde_factura_pde_oc_gral_tipo_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_gral_tipo_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_gral_tipo_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_oc_importe_unitario' type='text' class='textbox' id='buscador_pde_factura_pde_oc_importe_unitario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.importe_unitario')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_oc_importe_unitario_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.importe_unitario');
			if(trim($buscador_pde_factura_pde_oc_importe_unitario_comparador) == '') $buscador_pde_factura_pde_oc_importe_unitario_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_importe_unitario_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_importe_unitario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_oc_cantidad' type='text' class='textbox' id='buscador_pde_factura_pde_oc_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_oc_cantidad_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.cantidad');
			if(trim($buscador_pde_factura_pde_oc_cantidad_comparador) == '') $buscador_pde_factura_pde_oc_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumoCosto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_ins_insumo_costo_id', Gral::getCmbFiltro(InsInsumoCosto::getInsInsumoCostosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.ins_insumo_costo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_oc_ins_insumo_costo_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.ins_insumo_costo_id');
			if(trim($buscador_pde_factura_pde_oc_ins_insumo_costo_id_comparador) == '') $buscador_pde_factura_pde_oc_ins_insumo_costo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_ins_insumo_costo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_ins_insumo_costo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_oc_importe_costo' type='text' class='textbox' id='buscador_pde_factura_pde_oc_importe_costo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.importe_costo')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_oc_importe_costo_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.importe_costo');
			if(trim($buscador_pde_factura_pde_oc_importe_costo_comparador) == '') $buscador_pde_factura_pde_oc_importe_costo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_importe_costo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_importe_costo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Porc Descuento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_oc_porcentaje_descuento' type='text' class='textbox' id='buscador_pde_factura_pde_oc_porcentaje_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.porcentaje_descuento')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_oc_porcentaje_descuento_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.porcentaje_descuento');
			if(trim($buscador_pde_factura_pde_oc_porcentaje_descuento_comparador) == '') $buscador_pde_factura_pde_oc_porcentaje_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_porcentaje_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_porcentaje_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_oc_codigo' type='text' class='textbox' id='buscador_pde_factura_pde_oc_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_oc_codigo_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.codigo');
			if(trim($buscador_pde_factura_pde_oc_codigo_comparador) == '') $buscador_pde_factura_pde_oc_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_oc_observacion' type='text' class='textbox' id='buscador_pde_factura_pde_oc_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_oc_observacion_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.observacion');
			if(trim($buscador_pde_factura_pde_oc_observacion_comparador) == '') $buscador_pde_factura_pde_oc_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_oc.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_factura_pde_oc_estado_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_oc.estado');
			if(trim($buscador_pde_factura_pde_oc_estado_comparador) == '') $buscador_pde_factura_pde_oc_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_oc_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_oc_estado_comparador, 'textbox comparador') ?>
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

