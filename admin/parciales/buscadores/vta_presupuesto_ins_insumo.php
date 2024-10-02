<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPresupuestoInsInsumo::SES_CRITERIOS);
$criterio->addTabla('vta_presupuesto_ins_insumo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_presupuesto_ins_insumo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_ins_insumo_descripcion' type='text' class='textbox' id='buscador_vta_presupuesto_ins_insumo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_descripcion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.descripcion');
			if(trim($buscador_vta_presupuesto_ins_insumo_descripcion_comparador) == '') $buscador_vta_presupuesto_ins_insumo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPresupuesto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_presupuesto_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_vta_presupuesto_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.vta_presupuesto_id');
			if(trim($buscador_vta_presupuesto_ins_insumo_vta_presupuesto_id_comparador) == '') $buscador_vta_presupuesto_ins_insumo_vta_presupuesto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_vta_presupuesto_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_vta_presupuesto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_id');
			if(trim($buscador_vta_presupuesto_ins_insumo_ins_insumo_id_comparador) == '') $buscador_vta_presupuesto_ins_insumo_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.gral_tipo_iva_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_gral_tipo_iva_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.gral_tipo_iva_id');
			if(trim($buscador_vta_presupuesto_ins_insumo_gral_tipo_iva_id_comparador) == '') $buscador_vta_presupuesto_ins_insumo_gral_tipo_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_gral_tipo_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_gral_tipo_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsListaPrecio') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_ins_lista_precio_id', Gral::getCmbFiltro(InsListaPrecio::getInsListaPreciosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_lista_precio_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_ins_lista_precio_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.ins_lista_precio_id');
			if(trim($buscador_vta_presupuesto_ins_insumo_ins_lista_precio_id_comparador) == '') $buscador_vta_presupuesto_ins_insumo_ins_lista_precio_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_ins_lista_precio_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_ins_lista_precio_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_ins_insumo_importe_unitario' type='text' class='textbox' id='buscador_vta_presupuesto_ins_insumo_importe_unitario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.importe_unitario')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_importe_unitario_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.importe_unitario');
			if(trim($buscador_vta_presupuesto_ins_insumo_importe_unitario_comparador) == '') $buscador_vta_presupuesto_ins_insumo_importe_unitario_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_importe_unitario_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_importe_unitario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_ins_insumo_cantidad' type='text' class='textbox' id='buscador_vta_presupuesto_ins_insumo_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_cantidad_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.cantidad');
			if(trim($buscador_vta_presupuesto_ins_insumo_cantidad_comparador) == '') $buscador_vta_presupuesto_ins_insumo_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_ins_insumo_descuento' type='text' class='textbox' id='buscador_vta_presupuesto_ins_insumo_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.descuento')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_descuento_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.descuento');
			if(trim($buscador_vta_presupuesto_ins_insumo_descuento_comparador) == '') $buscador_vta_presupuesto_ins_insumo_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Conflicto') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_conflicto', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.conflicto'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_conflicto_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.conflicto');
			if(trim($buscador_vta_presupuesto_ins_insumo_conflicto_comparador) == '') $buscador_vta_presupuesto_ins_insumo_conflicto_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_conflicto_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_conflicto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumoCosto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_ins_insumo_costo_id', Gral::getCmbFiltro(InsInsumoCosto::getInsInsumoCostosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_costo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_ins_insumo_costo_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.ins_insumo_costo_id');
			if(trim($buscador_vta_presupuesto_ins_insumo_ins_insumo_costo_id_comparador) == '') $buscador_vta_presupuesto_ins_insumo_ins_insumo_costo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_ins_insumo_costo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_ins_insumo_costo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_ins_insumo_importe_costo' type='text' class='textbox' id='buscador_vta_presupuesto_ins_insumo_importe_costo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.importe_costo')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_importe_costo_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.importe_costo');
			if(trim($buscador_vta_presupuesto_ins_insumo_importe_costo_comparador) == '') $buscador_vta_presupuesto_ins_insumo_importe_costo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_importe_costo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_importe_costo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_id', Gral::getCmbFiltro(VtaPoliticaDescuento::getVtaPoliticaDescuentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_id');
			if(trim($buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_id_comparador) == '') $buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPoliticaDescuentoRango') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_rango_id', Gral::getCmbFiltro(VtaPoliticaDescuentoRango::getVtaPoliticaDescuentoRangosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_rango_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id');
			if(trim($buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_rango_id_comparador) == '') $buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_rango_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_rango_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_rango_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_ins_insumo_porcentaje_politica_descuento' type='text' class='textbox' id='buscador_vta_presupuesto_ins_insumo_porcentaje_politica_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.porcentaje_politica_descuento')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_porcentaje_politica_descuento_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.porcentaje_politica_descuento');
			if(trim($buscador_vta_presupuesto_ins_insumo_porcentaje_politica_descuento_comparador) == '') $buscador_vta_presupuesto_ins_insumo_porcentaje_politica_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_porcentaje_politica_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_porcentaje_politica_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_ins_insumo_importe_politica_descuento' type='text' class='textbox' id='buscador_vta_presupuesto_ins_insumo_importe_politica_descuento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.importe_politica_descuento')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_importe_politica_descuento_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.importe_politica_descuento');
			if(trim($buscador_vta_presupuesto_ins_insumo_importe_politica_descuento_comparador) == '') $buscador_vta_presupuesto_ins_insumo_importe_politica_descuento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_importe_politica_descuento_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_importe_politica_descuento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_ins_insumo_codigo' type='text' class='textbox' id='buscador_vta_presupuesto_ins_insumo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_codigo_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.codigo');
			if(trim($buscador_vta_presupuesto_ins_insumo_codigo_comparador) == '') $buscador_vta_presupuesto_ins_insumo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_ins_insumo_observacion' type='text' class='textbox' id='buscador_vta_presupuesto_ins_insumo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_observacion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.observacion');
			if(trim($buscador_vta_presupuesto_ins_insumo_observacion_comparador) == '') $buscador_vta_presupuesto_ins_insumo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_ins_insumo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_presupuesto_ins_insumo_estado_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_ins_insumo.estado');
			if(trim($buscador_vta_presupuesto_ins_insumo_estado_comparador) == '') $buscador_vta_presupuesto_ins_insumo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_ins_insumo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_ins_insumo_estado_comparador, 'textbox comparador') ?>
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

