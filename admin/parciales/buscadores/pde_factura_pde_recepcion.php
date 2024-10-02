<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeFacturaPdeRecepcion::SES_CRITERIOS);
$criterio->addTabla('pde_factura_pde_recepcion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_factura_pde_recepcion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_recepcion_descripcion' type='text' class='textbox' id='buscador_pde_factura_pde_recepcion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_recepcion_descripcion_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.descripcion');
			if(trim($buscador_pde_factura_pde_recepcion_descripcion_comparador) == '') $buscador_pde_factura_pde_recepcion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_pde_factura_id', Gral::getCmbFiltro(PdeFactura::getPdeFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.pde_factura_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_recepcion_pde_factura_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.pde_factura_id');
			if(trim($buscador_pde_factura_pde_recepcion_pde_factura_id_comparador) == '') $buscador_pde_factura_pde_recepcion_pde_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_pde_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_pde_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_pde_recepcion_id', Gral::getCmbFiltro(PdeRecepcion::getPdeRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.pde_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_recepcion_pde_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.pde_recepcion_id');
			if(trim($buscador_pde_factura_pde_recepcion_pde_recepcion_id_comparador) == '') $buscador_pde_factura_pde_recepcion_pde_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_pde_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_pde_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_recepcion_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.ins_insumo_id');
			if(trim($buscador_pde_factura_pde_recepcion_ins_insumo_id_comparador) == '') $buscador_pde_factura_pde_recepcion_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsUnidadMedida') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_ins_unidad_medida_id', Gral::getCmbFiltro(InsUnidadMedida::getInsUnidadMedidasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_unidad_medida_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_recepcion_ins_unidad_medida_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.ins_unidad_medida_id');
			if(trim($buscador_pde_factura_pde_recepcion_ins_unidad_medida_id_comparador) == '') $buscador_pde_factura_pde_recepcion_ins_unidad_medida_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_ins_unidad_medida_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_ins_unidad_medida_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.gral_tipo_iva_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_recepcion_gral_tipo_iva_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.gral_tipo_iva_id');
			if(trim($buscador_pde_factura_pde_recepcion_gral_tipo_iva_id_comparador) == '') $buscador_pde_factura_pde_recepcion_gral_tipo_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_gral_tipo_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_gral_tipo_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_recepcion_importe_unitario' type='text' class='textbox' id='buscador_pde_factura_pde_recepcion_importe_unitario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.importe_unitario')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_recepcion_importe_unitario_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.importe_unitario');
			if(trim($buscador_pde_factura_pde_recepcion_importe_unitario_comparador) == '') $buscador_pde_factura_pde_recepcion_importe_unitario_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_importe_unitario_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_importe_unitario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_recepcion_cantidad' type='text' class='textbox' id='buscador_pde_factura_pde_recepcion_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_recepcion_cantidad_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.cantidad');
			if(trim($buscador_pde_factura_pde_recepcion_cantidad_comparador) == '') $buscador_pde_factura_pde_recepcion_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumoCosto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_ins_insumo_costo_id', Gral::getCmbFiltro(InsInsumoCosto::getInsInsumoCostosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.ins_insumo_costo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_pde_recepcion_ins_insumo_costo_id_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.ins_insumo_costo_id');
			if(trim($buscador_pde_factura_pde_recepcion_ins_insumo_costo_id_comparador) == '') $buscador_pde_factura_pde_recepcion_ins_insumo_costo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_ins_insumo_costo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_ins_insumo_costo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_recepcion_importe_costo' type='text' class='textbox' id='buscador_pde_factura_pde_recepcion_importe_costo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.importe_costo')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_recepcion_importe_costo_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.importe_costo');
			if(trim($buscador_pde_factura_pde_recepcion_importe_costo_comparador) == '') $buscador_pde_factura_pde_recepcion_importe_costo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_importe_costo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_importe_costo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_recepcion_codigo' type='text' class='textbox' id='buscador_pde_factura_pde_recepcion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_recepcion_codigo_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.codigo');
			if(trim($buscador_pde_factura_pde_recepcion_codigo_comparador) == '') $buscador_pde_factura_pde_recepcion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_pde_recepcion_observacion' type='text' class='textbox' id='buscador_pde_factura_pde_recepcion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_pde_recepcion_observacion_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.observacion');
			if(trim($buscador_pde_factura_pde_recepcion_observacion_comparador) == '') $buscador_pde_factura_pde_recepcion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_pde_recepcion.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_factura_pde_recepcion_estado_comparador = $criterio->getComparadorDeCampo('pde_factura_pde_recepcion.estado');
			if(trim($buscador_pde_factura_pde_recepcion_estado_comparador) == '') $buscador_pde_factura_pde_recepcion_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_pde_recepcion_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_pde_recepcion_estado_comparador, 'textbox comparador') ?>
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

