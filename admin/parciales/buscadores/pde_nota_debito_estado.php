<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeNotaDebitoEstado::SES_CRITERIOS);
$criterio->addTabla('pde_nota_debito_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_nota_debito_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_estado_descripcion' type='text' class='textbox' id='buscador_pde_nota_debito_estado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_estado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_estado_descripcion_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_estado.descripcion');
			if(trim($buscador_pde_nota_debito_estado_descripcion_comparador) == '') $buscador_pde_nota_debito_estado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_estado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeNotaDebito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_pde_nota_debito_id', Gral::getCmbFiltro(PdeNotaDebito::getPdeNotaDebitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_estado.pde_nota_debito_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_estado_pde_nota_debito_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_estado.pde_nota_debito_id');
			if(trim($buscador_pde_nota_debito_estado_pde_nota_debito_id_comparador) == '') $buscador_pde_nota_debito_estado_pde_nota_debito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_pde_nota_debito_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_estado_pde_nota_debito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeNotaDebitoTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_pde_nota_debito_tipo_estado_id', Gral::getCmbFiltro(PdeNotaDebitoTipoEstado::getPdeNotaDebitoTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_estado.pde_nota_debito_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pde_nota_debito_estado_pde_nota_debito_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_estado.pde_nota_debito_tipo_estado_id');
			if(trim($buscador_pde_nota_debito_estado_pde_nota_debito_tipo_estado_id_comparador) == '') $buscador_pde_nota_debito_estado_pde_nota_debito_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_pde_nota_debito_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_estado_pde_nota_debito_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inicial') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_inicial', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_estado.inicial'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_nota_debito_estado_inicial_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_estado.inicial');
			if(trim($buscador_pde_nota_debito_estado_inicial_comparador) == '') $buscador_pde_nota_debito_estado_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_estado_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Actual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_actual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_estado.actual'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_nota_debito_estado_actual_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_estado.actual');
			if(trim($buscador_pde_nota_debito_estado_actual_comparador) == '') $buscador_pde_nota_debito_estado_actual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_actual_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_estado_actual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_estado_codigo' type='text' class='textbox' id='buscador_pde_nota_debito_estado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_estado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_estado_codigo_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_estado.codigo');
			if(trim($buscador_pde_nota_debito_estado_codigo_comparador) == '') $buscador_pde_nota_debito_estado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_estado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_nota_debito_estado_observacion' type='text' class='textbox' id='buscador_pde_nota_debito_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_nota_debito_estado_observacion_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_estado.observacion');
			if(trim($buscador_pde_nota_debito_estado_observacion_comparador) == '') $buscador_pde_nota_debito_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_estado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_nota_debito_estado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_nota_debito_estado_estado_comparador = $criterio->getComparadorDeCampo('pde_nota_debito_estado.estado');
			if(trim($buscador_pde_nota_debito_estado_estado_comparador) == '') $buscador_pde_nota_debito_estado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_nota_debito_estado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_nota_debito_estado_estado_comparador, 'textbox comparador') ?>
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

