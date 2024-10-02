<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaReciboItemRetencion::SES_CRITERIOS);
$criterio->addTabla('vta_recibo_item_retencion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_recibo_item_retencion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_retencion_descripcion' type='text' class='textbox' id='buscador_vta_recibo_item_retencion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_retencion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_retencion_descripcion_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.descripcion');
			if(trim($buscador_vta_recibo_item_retencion_descripcion_comparador) == '') $buscador_vta_recibo_item_retencion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_retencion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_vta_recibo_id', Gral::getCmbFiltro(VtaRecibo::getVtaRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_retencion.vta_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_item_retencion_vta_recibo_id_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.vta_recibo_id');
			if(trim($buscador_vta_recibo_item_retencion_vta_recibo_id_comparador) == '') $buscador_vta_recibo_item_retencion_vta_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_vta_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_retencion_vta_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaReciboItem') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_vta_recibo_item_id', Gral::getCmbFiltro(VtaReciboItem::getVtaReciboItemsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_retencion.vta_recibo_item_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_item_retencion_vta_recibo_item_id_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.vta_recibo_item_id');
			if(trim($buscador_vta_recibo_item_retencion_vta_recibo_item_id_comparador) == '') $buscador_vta_recibo_item_retencion_vta_recibo_item_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_vta_recibo_item_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_retencion_vta_recibo_item_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero de Comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_retencion_numero_comprobante' type='text' class='textbox' id='buscador_vta_recibo_item_retencion_numero_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_retencion.numero_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_retencion_numero_comprobante_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.numero_comprobante');
			if(trim($buscador_vta_recibo_item_retencion_numero_comprobante_comparador) == '') $buscador_vta_recibo_item_retencion_numero_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_numero_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_retencion_numero_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_retencion_fecha_emision' type='text' class='textbox' id='buscador_vta_recibo_item_retencion_fecha_emision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('vta_recibo_item_retencion.fecha_emision'))) ?>' size='15' />
					<input type='button' id='cal_buscador_vta_recibo_item_retencion_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_vta_recibo_item_retencion_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_buscador_vta_recibo_item_retencion_fecha_emision'
						});
					</script>
		
        	<?php 
			$buscador_vta_recibo_item_retencion_fecha_emision_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.fecha_emision');
			if(trim($buscador_vta_recibo_item_retencion_fecha_emision_comparador) == '') $buscador_vta_recibo_item_retencion_fecha_emision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_fecha_emision_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_retencion_fecha_emision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Imp BI') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_retencion_importe_base_imponible' type='text' class='textbox' id='buscador_vta_recibo_item_retencion_importe_base_imponible' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_retencion.importe_base_imponible')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_retencion_importe_base_imponible_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.importe_base_imponible');
			if(trim($buscador_vta_recibo_item_retencion_importe_base_imponible_comparador) == '') $buscador_vta_recibo_item_retencion_importe_base_imponible_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_importe_base_imponible_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_retencion_importe_base_imponible_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Imp Retencion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_retencion_importe_retencion' type='text' class='textbox' id='buscador_vta_recibo_item_retencion_importe_retencion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_retencion.importe_retencion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_retencion_importe_retencion_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.importe_retencion');
			if(trim($buscador_vta_recibo_item_retencion_importe_retencion_comparador) == '') $buscador_vta_recibo_item_retencion_importe_retencion_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_importe_retencion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_retencion_importe_retencion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_retencion_codigo' type='text' class='textbox' id='buscador_vta_recibo_item_retencion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_retencion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_retencion_codigo_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.codigo');
			if(trim($buscador_vta_recibo_item_retencion_codigo_comparador) == '') $buscador_vta_recibo_item_retencion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_retencion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_retencion_observacion' type='text' class='textbox' id='buscador_vta_recibo_item_retencion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_retencion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_retencion_observacion_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.observacion');
			if(trim($buscador_vta_recibo_item_retencion_observacion_comparador) == '') $buscador_vta_recibo_item_retencion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_retencion_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item_retencion.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_recibo_item_retencion_estado_comparador = $criterio->getComparadorDeCampo('vta_recibo_item_retencion.estado');
			if(trim($buscador_vta_recibo_item_retencion_estado_comparador) == '') $buscador_vta_recibo_item_retencion_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_retencion_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_retencion_estado_comparador, 'textbox comparador') ?>
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

