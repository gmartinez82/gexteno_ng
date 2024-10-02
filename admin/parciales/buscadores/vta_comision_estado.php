<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaComisionEstado::SES_CRITERIOS);
$criterio->addTabla('vta_comision_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_comision_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_estado_descripcion' type='text' class='textbox' id='buscador_vta_comision_estado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_estado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_estado_descripcion_comparador = $criterio->getComparadorDeCampo('vta_comision_estado.descripcion');
			if(trim($buscador_vta_comision_estado_descripcion_comparador) == '') $buscador_vta_comision_estado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_estado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_estado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComision') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comision_estado_vta_comision_id', Gral::getCmbFiltro(VtaComision::getVtaComisionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_estado.vta_comision_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comision_estado_vta_comision_id_comparador = $criterio->getComparadorDeCampo('vta_comision_estado.vta_comision_id');
			if(trim($buscador_vta_comision_estado_vta_comision_id_comparador) == '') $buscador_vta_comision_estado_vta_comision_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_estado_vta_comision_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_estado_vta_comision_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComisionTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comision_estado_vta_comision_tipo_estado_id', Gral::getCmbFiltro(VtaComisionTipoEstado::getVtaComisionTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_estado.vta_comision_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comision_estado_vta_comision_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('vta_comision_estado.vta_comision_tipo_estado_id');
			if(trim($buscador_vta_comision_estado_vta_comision_tipo_estado_id_comparador) == '') $buscador_vta_comision_estado_vta_comision_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_estado_vta_comision_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_estado_vta_comision_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inicial') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_comision_estado_inicial', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_estado.inicial'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_comision_estado_inicial_comparador = $criterio->getComparadorDeCampo('vta_comision_estado.inicial');
			if(trim($buscador_vta_comision_estado_inicial_comparador) == '') $buscador_vta_comision_estado_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_estado_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_estado_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Actual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_comision_estado_actual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_estado.actual'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_comision_estado_actual_comparador = $criterio->getComparadorDeCampo('vta_comision_estado.actual');
			if(trim($buscador_vta_comision_estado_actual_comparador) == '') $buscador_vta_comision_estado_actual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_estado_actual_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_estado_actual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_estado_codigo' type='text' class='textbox' id='buscador_vta_comision_estado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_estado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_estado_codigo_comparador = $criterio->getComparadorDeCampo('vta_comision_estado.codigo');
			if(trim($buscador_vta_comision_estado_codigo_comparador) == '') $buscador_vta_comision_estado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_estado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_estado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_estado_nota_interna' type='text' class='textbox' id='buscador_vta_comision_estado_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_estado.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_estado_nota_interna_comparador = $criterio->getComparadorDeCampo('vta_comision_estado.nota_interna');
			if(trim($buscador_vta_comision_estado_nota_interna_comparador) == '') $buscador_vta_comision_estado_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_estado_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_estado_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_estado_nota_publica' type='text' class='textbox' id='buscador_vta_comision_estado_nota_publica' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_estado.nota_publica')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_estado_nota_publica_comparador = $criterio->getComparadorDeCampo('vta_comision_estado.nota_publica');
			if(trim($buscador_vta_comision_estado_nota_publica_comparador) == '') $buscador_vta_comision_estado_nota_publica_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_estado_nota_publica_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_estado_nota_publica_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_estado_observacion' type='text' class='textbox' id='buscador_vta_comision_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_estado_observacion_comparador = $criterio->getComparadorDeCampo('vta_comision_estado.observacion');
			if(trim($buscador_vta_comision_estado_observacion_comparador) == '') $buscador_vta_comision_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_estado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_comision_estado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_estado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_comision_estado_estado_comparador = $criterio->getComparadorDeCampo('vta_comision_estado.estado');
			if(trim($buscador_vta_comision_estado_estado_comparador) == '') $buscador_vta_comision_estado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_estado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_estado_estado_comparador, 'textbox comparador') ?>
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

