<?php
include_once "_autoload.php";
$criterio = new Criterio(ConfVariable::SES_CRITERIOS);
$criterio->addTabla('conf_variable');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='conf_variable'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_conf_variable_descripcion' type='text' class='textbox' id='buscador_conf_variable_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('conf_variable.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_conf_variable_descripcion_comparador = $criterio->getComparadorDeCampo('conf_variable.descripcion');
			if(trim($buscador_conf_variable_descripcion_comparador) == '') $buscador_conf_variable_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_conf_variable_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_conf_variable_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Categoria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_conf_variable_conf_categoria_id', Gral::getCmbFiltro(ConfCategoria::getConfCategoriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('conf_variable.conf_categoria_id'), 'textbox')?>
        	<?php 
			$buscador_conf_variable_conf_categoria_id_comparador = $criterio->getComparadorDeCampo('conf_variable.conf_categoria_id');
			if(trim($buscador_conf_variable_conf_categoria_id_comparador) == '') $buscador_conf_variable_conf_categoria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_conf_variable_conf_categoria_id_comparador', Criterio::getComparadoresCmb(), $buscador_conf_variable_conf_categoria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('valor') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_conf_variable_valor' type='text' class='textbox' id='buscador_conf_variable_valor' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('conf_variable.valor')) ?>' size='22' />
        	<?php 
			$buscador_conf_variable_valor_comparador = $criterio->getComparadorDeCampo('conf_variable.valor');
			if(trim($buscador_conf_variable_valor_comparador) == '') $buscador_conf_variable_valor_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_conf_variable_valor_comparador', Criterio::getComparadoresCmb(), $buscador_conf_variable_valor_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_conf_variable_codigo' type='text' class='textbox' id='buscador_conf_variable_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('conf_variable.codigo')) ?>' size='22' />
        	<?php 
			$buscador_conf_variable_codigo_comparador = $criterio->getComparadorDeCampo('conf_variable.codigo');
			if(trim($buscador_conf_variable_codigo_comparador) == '') $buscador_conf_variable_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_conf_variable_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_conf_variable_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_conf_variable_observacion' type='text' class='textbox' id='buscador_conf_variable_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('conf_variable.observacion')) ?>' size='22' />
        	<?php 
			$buscador_conf_variable_observacion_comparador = $criterio->getComparadorDeCampo('conf_variable.observacion');
			if(trim($buscador_conf_variable_observacion_comparador) == '') $buscador_conf_variable_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_conf_variable_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_conf_variable_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_conf_variable_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('conf_variable.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_conf_variable_estado_comparador = $criterio->getComparadorDeCampo('conf_variable.estado');
			if(trim($buscador_conf_variable_estado_comparador) == '') $buscador_conf_variable_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_conf_variable_estado_comparador', Criterio::getComparadoresCmb(), $buscador_conf_variable_estado_comparador, 'textbox comparador') ?>
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

