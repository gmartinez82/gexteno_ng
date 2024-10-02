<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaComisionVtaFactura::SES_CRITERIOS);
$criterio->addTabla('vta_comision_vta_factura');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_comision_vta_factura'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_vta_factura_descripcion' type='text' class='textbox' id='buscador_vta_comision_vta_factura_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_vta_factura.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_vta_factura_descripcion_comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.descripcion');
			if(trim($buscador_vta_comision_vta_factura_descripcion_comparador) == '') $buscador_vta_comision_vta_factura_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_factura_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComision') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_vta_comision_id', Gral::getCmbFiltro(VtaComision::getVtaComisionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_vta_factura.vta_comision_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comision_vta_factura_vta_comision_id_comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.vta_comision_id');
			if(trim($buscador_vta_comision_vta_factura_vta_comision_id_comparador) == '') $buscador_vta_comision_vta_factura_vta_comision_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_vta_comision_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_factura_vta_comision_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_vta_factura_id', Gral::getCmbFiltro(VtaFactura::getVtaFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_vta_factura.vta_factura_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comision_vta_factura_vta_factura_id_comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.vta_factura_id');
			if(trim($buscador_vta_comision_vta_factura_vta_factura_id_comparador) == '') $buscador_vta_comision_vta_factura_vta_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_vta_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_factura_vta_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_vta_factura_base_comisionable' type='text' class='textbox' id='buscador_vta_comision_vta_factura_base_comisionable' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_vta_factura.base_comisionable')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_vta_factura_base_comisionable_comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.base_comisionable');
			if(trim($buscador_vta_comision_vta_factura_base_comisionable_comparador) == '') $buscador_vta_comision_vta_factura_base_comisionable_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_base_comisionable_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_factura_base_comisionable_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_vta_factura_importe_afectado' type='text' class='textbox' id='buscador_vta_comision_vta_factura_importe_afectado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_vta_factura.importe_afectado')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_vta_factura_importe_afectado_comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.importe_afectado');
			if(trim($buscador_vta_comision_vta_factura_importe_afectado_comparador) == '') $buscador_vta_comision_vta_factura_importe_afectado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_importe_afectado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_factura_importe_afectado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Porc Comision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_vta_factura_porcentaje_comision' type='text' class='textbox' id='buscador_vta_comision_vta_factura_porcentaje_comision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_vta_factura.porcentaje_comision')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_vta_factura_porcentaje_comision_comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.porcentaje_comision');
			if(trim($buscador_vta_comision_vta_factura_porcentaje_comision_comparador) == '') $buscador_vta_comision_vta_factura_porcentaje_comision_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_porcentaje_comision_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_factura_porcentaje_comision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_vta_factura_importe_comision' type='text' class='textbox' id='buscador_vta_comision_vta_factura_importe_comision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_vta_factura.importe_comision')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_vta_factura_importe_comision_comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.importe_comision');
			if(trim($buscador_vta_comision_vta_factura_importe_comision_comparador) == '') $buscador_vta_comision_vta_factura_importe_comision_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_importe_comision_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_factura_importe_comision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_vta_factura_codigo' type='text' class='textbox' id='buscador_vta_comision_vta_factura_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_vta_factura.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_vta_factura_codigo_comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.codigo');
			if(trim($buscador_vta_comision_vta_factura_codigo_comparador) == '') $buscador_vta_comision_vta_factura_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_factura_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_vta_factura_observacion' type='text' class='textbox' id='buscador_vta_comision_vta_factura_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_vta_factura.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_vta_factura_observacion_comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.observacion');
			if(trim($buscador_vta_comision_vta_factura_observacion_comparador) == '') $buscador_vta_comision_vta_factura_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_factura_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_vta_factura.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_comision_vta_factura_estado_comparador = $criterio->getComparadorDeCampo('vta_comision_vta_factura.estado');
			if(trim($buscador_vta_comision_vta_factura_estado_comparador) == '') $buscador_vta_comision_vta_factura_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_vta_factura_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_vta_factura_estado_comparador, 'textbox comparador') ?>
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

