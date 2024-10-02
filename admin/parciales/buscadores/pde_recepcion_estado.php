<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeRecepcionEstado::SES_CRITERIOS);
$criterio->addTabla('pde_recepcion_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_recepcion_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_estado_pde_recepcion_id', Gral::getCmbFiltro(PdeRecepcion::getPdeRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado.pde_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_estado_pde_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.pde_recepcion_id');
			if(trim($buscador_pde_recepcion_estado_pde_recepcion_id_comparador) == '') $buscador_pde_recepcion_estado_pde_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_pde_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_pde_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecepcionTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_estado_pde_recepcion_tipo_estado_id', Gral::getCmbFiltro(PdeRecepcionTipoEstado::getPdeRecepcionTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado.pde_recepcion_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_estado_pde_recepcion_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.pde_recepcion_tipo_estado_id');
			if(trim($buscador_pde_recepcion_estado_pde_recepcion_tipo_estado_id_comparador) == '') $buscador_pde_recepcion_estado_pde_recepcion_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_pde_recepcion_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_pde_recepcion_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_estado_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado.pde_centro_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_estado_pde_centro_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.pde_centro_recepcion_id');
			if(trim($buscador_pde_recepcion_estado_pde_centro_recepcion_id_comparador) == '') $buscador_pde_recepcion_estado_pde_centro_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_pde_centro_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_pde_centro_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanPanol') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_estado_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado.pan_panol_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_estado_pan_panol_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.pan_panol_id');
			if(trim($buscador_pde_recepcion_estado_pan_panol_id_comparador) == '') $buscador_pde_recepcion_estado_pan_panol_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_pan_panol_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_pan_panol_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_estado_cantidad' type='text' class='textbox' id='buscador_pde_recepcion_estado_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_estado_cantidad_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.cantidad');
			if(trim($buscador_pde_recepcion_estado_cantidad_comparador) == '') $buscador_pde_recepcion_estado_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_estado_observacion' type='text' class='textbox' id='buscador_pde_recepcion_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_estado_observacion_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado.observacion');
			if(trim($buscador_pde_recepcion_estado_observacion_comparador) == '') $buscador_pde_recepcion_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_observacion_comparador, 'textbox comparador') ?>
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

