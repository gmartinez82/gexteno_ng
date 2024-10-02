<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeRecepcionEstadoFacturacion::SES_CRITERIOS);
$criterio->addTabla('pde_recepcion_estado_facturacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_recepcion_estado_facturacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_estado_facturacion_descripcion' type='text' class='textbox' id='buscador_pde_recepcion_estado_facturacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_estado_facturacion_descripcion_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.descripcion');
			if(trim($buscador_pde_recepcion_estado_facturacion_descripcion_comparador) == '') $buscador_pde_recepcion_estado_facturacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_facturacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_pde_recepcion_id', Gral::getCmbFiltro(PdeRecepcion::getPdeRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_estado_facturacion_pde_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_id');
			if(trim($buscador_pde_recepcion_estado_facturacion_pde_recepcion_id_comparador) == '') $buscador_pde_recepcion_estado_facturacion_pde_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_pde_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_facturacion_pde_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecepcionTipoEstadoFacturacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_pde_recepcion_tipo_estado_facturacion_id', Gral::getCmbFiltro(PdeRecepcionTipoEstadoFacturacion::getPdeRecepcionTipoEstadoFacturacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_tipo_estado_facturacion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_estado_facturacion_pde_recepcion_tipo_estado_facturacion_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.pde_recepcion_tipo_estado_facturacion_id');
			if(trim($buscador_pde_recepcion_estado_facturacion_pde_recepcion_tipo_estado_facturacion_id_comparador) == '') $buscador_pde_recepcion_estado_facturacion_pde_recepcion_tipo_estado_facturacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_pde_recepcion_tipo_estado_facturacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_facturacion_pde_recepcion_tipo_estado_facturacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inicial') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_inicial', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.inicial'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_recepcion_estado_facturacion_inicial_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.inicial');
			if(trim($buscador_pde_recepcion_estado_facturacion_inicial_comparador) == '') $buscador_pde_recepcion_estado_facturacion_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_facturacion_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Actual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_actual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.actual'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_recepcion_estado_facturacion_actual_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.actual');
			if(trim($buscador_pde_recepcion_estado_facturacion_actual_comparador) == '') $buscador_pde_recepcion_estado_facturacion_actual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_actual_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_facturacion_actual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_estado_facturacion_codigo' type='text' class='textbox' id='buscador_pde_recepcion_estado_facturacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_estado_facturacion_codigo_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.codigo');
			if(trim($buscador_pde_recepcion_estado_facturacion_codigo_comparador) == '') $buscador_pde_recepcion_estado_facturacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_facturacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_estado_facturacion_observacion' type='text' class='textbox' id='buscador_pde_recepcion_estado_facturacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_estado_facturacion_observacion_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.observacion');
			if(trim($buscador_pde_recepcion_estado_facturacion_observacion_comparador) == '') $buscador_pde_recepcion_estado_facturacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_facturacion_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_estado_facturacion.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_recepcion_estado_facturacion_estado_comparador = $criterio->getComparadorDeCampo('pde_recepcion_estado_facturacion.estado');
			if(trim($buscador_pde_recepcion_estado_facturacion_estado_comparador) == '') $buscador_pde_recepcion_estado_facturacion_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_estado_facturacion_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_estado_facturacion_estado_comparador, 'textbox comparador') ?>
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

