<?php
include_once "_autoload.php";
$criterio = new Criterio(InsInsumoCosto::SES_CRITERIOS);
$criterio->addTabla('ins_insumo_costo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_insumo_costo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_costo_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_costo.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_costo_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.ins_insumo_id');
			if(trim($buscador_ins_insumo_costo_ins_insumo_id_comparador) == '') $buscador_ins_insumo_costo_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_costo_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_costo_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_costo_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_costo.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_costo_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.prv_proveedor_id');
			if(trim($buscador_ins_insumo_costo_prv_proveedor_id_comparador) == '') $buscador_ins_insumo_costo_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_costo_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_costo_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_costo_descripcion' type='text' class='textbox' id='buscador_ins_insumo_costo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_costo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_costo_descripcion_comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.descripcion');
			if(trim($buscador_ins_insumo_costo_descripcion_comparador) == '') $buscador_ins_insumo_costo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_costo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_costo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_costo_codigo' type='text' class='textbox' id='buscador_ins_insumo_costo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_costo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_costo_codigo_comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.codigo');
			if(trim($buscador_ins_insumo_costo_codigo_comparador) == '') $buscador_ins_insumo_costo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_costo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_costo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_costo_fecha' type='text' class='textbox' id='buscador_ins_insumo_costo_fecha' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_costo.fecha')) ?>' size='15' />
					<input type='button' id='cal_buscador_ins_insumo_costo_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_ins_insumo_costo_fecha', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_ins_insumo_costo_fecha'
						});
					</script>
		
        	<?php 
			$buscador_ins_insumo_costo_fecha_comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.fecha');
			if(trim($buscador_ins_insumo_costo_fecha_comparador) == '') $buscador_ins_insumo_costo_fecha_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_costo_fecha_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_costo_fecha_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvImportacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_costo_prv_importacion_id', Gral::getCmbFiltro(PrvImportacion::getPrvImportacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_costo.prv_importacion_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_costo_prv_importacion_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.prv_importacion_id');
			if(trim($buscador_ins_insumo_costo_prv_importacion_id_comparador) == '') $buscador_ins_insumo_costo_prv_importacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_costo_prv_importacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_costo_prv_importacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsStockTransformacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_costo_ins_stock_transformacion_id', Gral::getCmbFiltro(InsStockTransformacion::getInsStockTransformacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_costo.ins_stock_transformacion_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_costo_ins_stock_transformacion_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.ins_stock_transformacion_id');
			if(trim($buscador_ins_insumo_costo_ins_stock_transformacion_id_comparador) == '') $buscador_ins_insumo_costo_ins_stock_transformacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_costo_ins_stock_transformacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_costo_ins_stock_transformacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_costo_observacion' type='text' class='textbox' id='buscador_ins_insumo_costo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_costo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_costo_observacion_comparador = $criterio->getComparadorDeCampo('ins_insumo_costo.observacion');
			if(trim($buscador_ins_insumo_costo_observacion_comparador) == '') $buscador_ins_insumo_costo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_costo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_costo_observacion_comparador, 'textbox comparador') ?>
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

