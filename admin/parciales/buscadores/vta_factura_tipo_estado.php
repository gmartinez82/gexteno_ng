<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaFacturaTipoEstado::SES_CRITERIOS);
$criterio->addTabla('vta_factura_tipo_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_factura_tipo_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_tipo_estado_descripcion' type='text' class='textbox' id='buscador_vta_factura_tipo_estado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_tipo_estado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_tipo_estado_descripcion_comparador = $criterio->getComparadorDeCampo('vta_factura_tipo_estado.descripcion');
			if(trim($buscador_vta_factura_tipo_estado_descripcion_comparador) == '') $buscador_vta_factura_tipo_estado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_tipo_estado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_tipo_estado_codigo' type='text' class='textbox' id='buscador_vta_factura_tipo_estado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_tipo_estado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_tipo_estado_codigo_comparador = $criterio->getComparadorDeCampo('vta_factura_tipo_estado.codigo');
			if(trim($buscador_vta_factura_tipo_estado_codigo_comparador) == '') $buscador_vta_factura_tipo_estado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_tipo_estado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Activo') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_activo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_tipo_estado.activo'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_factura_tipo_estado_activo_comparador = $criterio->getComparadorDeCampo('vta_factura_tipo_estado.activo');
			if(trim($buscador_vta_factura_tipo_estado_activo_comparador) == '') $buscador_vta_factura_tipo_estado_activo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_activo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_tipo_estado_activo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Terminal') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_terminal', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_tipo_estado.terminal'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_factura_tipo_estado_terminal_comparador = $criterio->getComparadorDeCampo('vta_factura_tipo_estado.terminal');
			if(trim($buscador_vta_factura_tipo_estado_terminal_comparador) == '') $buscador_vta_factura_tipo_estado_terminal_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_terminal_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_tipo_estado_terminal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Imputable') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_imputable', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_tipo_estado.imputable'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_factura_tipo_estado_imputable_comparador = $criterio->getComparadorDeCampo('vta_factura_tipo_estado.imputable');
			if(trim($buscador_vta_factura_tipo_estado_imputable_comparador) == '') $buscador_vta_factura_tipo_estado_imputable_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_imputable_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_tipo_estado_imputable_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Gestionable') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_gestionable', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_tipo_estado.gestionable'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_factura_tipo_estado_gestionable_comparador = $criterio->getComparadorDeCampo('vta_factura_tipo_estado.gestionable');
			if(trim($buscador_vta_factura_tipo_estado_gestionable_comparador) == '') $buscador_vta_factura_tipo_estado_gestionable_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_gestionable_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_tipo_estado_gestionable_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Aprobado por Afip') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_aprobado_afip', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_tipo_estado.aprobado_afip'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_factura_tipo_estado_aprobado_afip_comparador = $criterio->getComparadorDeCampo('vta_factura_tipo_estado.aprobado_afip');
			if(trim($buscador_vta_factura_tipo_estado_aprobado_afip_comparador) == '') $buscador_vta_factura_tipo_estado_aprobado_afip_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_aprobado_afip_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_tipo_estado_aprobado_afip_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Contabilizable') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_contabilizable', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_tipo_estado.contabilizable'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_factura_tipo_estado_contabilizable_comparador = $criterio->getComparadorDeCampo('vta_factura_tipo_estado.contabilizable');
			if(trim($buscador_vta_factura_tipo_estado_contabilizable_comparador) == '') $buscador_vta_factura_tipo_estado_contabilizable_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_contabilizable_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_tipo_estado_contabilizable_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Anulado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_anulado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_tipo_estado.anulado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_factura_tipo_estado_anulado_comparador = $criterio->getComparadorDeCampo('vta_factura_tipo_estado.anulado');
			if(trim($buscador_vta_factura_tipo_estado_anulado_comparador) == '') $buscador_vta_factura_tipo_estado_anulado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_anulado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_tipo_estado_anulado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_factura_tipo_estado_observacion' type='text' class='textbox' id='buscador_vta_factura_tipo_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_tipo_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_factura_tipo_estado_observacion_comparador = $criterio->getComparadorDeCampo('vta_factura_tipo_estado.observacion');
			if(trim($buscador_vta_factura_tipo_estado_observacion_comparador) == '') $buscador_vta_factura_tipo_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_tipo_estado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_factura_tipo_estado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_factura_tipo_estado_estado_comparador = $criterio->getComparadorDeCampo('vta_factura_tipo_estado.estado');
			if(trim($buscador_vta_factura_tipo_estado_estado_comparador) == '') $buscador_vta_factura_tipo_estado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_factura_tipo_estado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_factura_tipo_estado_estado_comparador, 'textbox comparador') ?>
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

