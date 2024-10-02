<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaReciboItemConciliado::SES_CRITERIOS);
$criterio->addTabla('vta_recibo_item_conciliado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_recibo_item_conciliado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_conciliado_descripcion' type='text' class='textbox' id='buscador_vta_recibo_item_conciliado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_conciliado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_conciliado_descripcion_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.descripcion');
			if(trim($buscador_vta_recibo_item_conciliado_descripcion_comparador) == '') $buscador_vta_recibo_item_conciliado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_conciliado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaReciboItem') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_vta_recibo_item_id', Gral::getCmbFiltro(VtaReciboItem::getVtaReciboItemsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_conciliado.vta_recibo_item_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_item_conciliado_vta_recibo_item_id_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.vta_recibo_item_id');
			if(trim($buscador_vta_recibo_item_conciliado_vta_recibo_item_id_comparador) == '') $buscador_vta_recibo_item_conciliado_vta_recibo_item_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_vta_recibo_item_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_conciliado_vta_recibo_item_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_conciliado_importe_original' type='text' class='textbox' id='buscador_vta_recibo_item_conciliado_importe_original' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_conciliado.importe_original')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_conciliado_importe_original_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.importe_original');
			if(trim($buscador_vta_recibo_item_conciliado_importe_original_comparador) == '') $buscador_vta_recibo_item_conciliado_importe_original_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_importe_original_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_conciliado_importe_original_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_conciliado_importe_conciliado' type='text' class='textbox' id='buscador_vta_recibo_item_conciliado_importe_conciliado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_conciliado.importe_conciliado')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_conciliado_importe_conciliado_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.importe_conciliado');
			if(trim($buscador_vta_recibo_item_conciliado_importe_conciliado_comparador) == '') $buscador_vta_recibo_item_conciliado_importe_conciliado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_importe_conciliado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_conciliado_importe_conciliado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_conciliado_importe_diferencia' type='text' class='textbox' id='buscador_vta_recibo_item_conciliado_importe_diferencia' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_conciliado.importe_diferencia')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_conciliado_importe_diferencia_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.importe_diferencia');
			if(trim($buscador_vta_recibo_item_conciliado_importe_diferencia_comparador) == '') $buscador_vta_recibo_item_conciliado_importe_diferencia_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_importe_diferencia_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_conciliado_importe_diferencia_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_conciliado_fecha' type='text' class='textbox' id='buscador_vta_recibo_item_conciliado_fecha' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_recibo_item_conciliado.fecha'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_recibo_item_conciliado_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_recibo_item_conciliado_fecha', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_recibo_item_conciliado_fecha'
						});
					</script>
		
        	<?php 
			$buscador_vta_recibo_item_conciliado_fecha_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.fecha');
			if(trim($buscador_vta_recibo_item_conciliado_fecha_comparador) == '') $buscador_vta_recibo_item_conciliado_fecha_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_fecha_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_conciliado_fecha_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_conciliado_codigo' type='text' class='textbox' id='buscador_vta_recibo_item_conciliado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_conciliado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_conciliado_codigo_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.codigo');
			if(trim($buscador_vta_recibo_item_conciliado_codigo_comparador) == '') $buscador_vta_recibo_item_conciliado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_conciliado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_conciliado_observacion' type='text' class='textbox' id='buscador_vta_recibo_item_conciliado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_conciliado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_conciliado_observacion_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.observacion');
			if(trim($buscador_vta_recibo_item_conciliado_observacion_comparador) == '') $buscador_vta_recibo_item_conciliado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_conciliado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_conciliado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_recibo_item_conciliado_estado_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_conciliado.estado');
			if(trim($buscador_vta_recibo_item_conciliado_estado_comparador) == '') $buscador_vta_recibo_item_conciliado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_conciliado_estado_comparador, 'textbox comparador') ?>
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

