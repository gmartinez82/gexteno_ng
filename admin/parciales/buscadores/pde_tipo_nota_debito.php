<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeTipoNotaDebito::SES_CRITERIOS);
$criterio->addTabla('pde_tipo_nota_debito');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_tipo_nota_debito'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_nota_debito_descripcion' type='text' class='textbox' id='buscador_pde_tipo_nota_debito_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_nota_debito.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_nota_debito_descripcion_comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_debito.descripcion');
			if(trim($buscador_pde_tipo_nota_debito_descripcion_comparador) == '') $buscador_pde_tipo_nota_debito_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_nota_debito_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_nota_debito_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Min') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_nota_debito_codigo_min' type='text' class='textbox' id='buscador_pde_tipo_nota_debito_codigo_min' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_nota_debito.codigo_min')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_nota_debito_codigo_min_comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_debito.codigo_min');
			if(trim($buscador_pde_tipo_nota_debito_codigo_min_comparador) == '') $buscador_pde_tipo_nota_debito_codigo_min_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_nota_debito_codigo_min_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_nota_debito_codigo_min_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_nota_debito_codigo' type='text' class='textbox' id='buscador_pde_tipo_nota_debito_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_nota_debito.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_nota_debito_codigo_comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_debito.codigo');
			if(trim($buscador_pde_tipo_nota_debito_codigo_comparador) == '') $buscador_pde_tipo_nota_debito_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_nota_debito_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_nota_debito_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_nota_debito_observacion' type='text' class='textbox' id='buscador_pde_tipo_nota_debito_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_nota_debito.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_nota_debito_observacion_comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_debito.observacion');
			if(trim($buscador_pde_tipo_nota_debito_observacion_comparador) == '') $buscador_pde_tipo_nota_debito_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_nota_debito_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_nota_debito_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_tipo_nota_debito_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_nota_debito.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_tipo_nota_debito_estado_comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_debito.estado');
			if(trim($buscador_pde_tipo_nota_debito_estado_comparador) == '') $buscador_pde_tipo_nota_debito_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_nota_debito_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_nota_debito_estado_comparador, 'textbox comparador') ?>
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

