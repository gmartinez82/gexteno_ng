<?php
include_once "_autoload.php";
$criterio = new Criterio(GralTipoPersoneria::SES_CRITERIOS);
$criterio->addTabla('gral_tipo_personeria');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_tipo_personeria'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_tipo_personeria_descripcion' type='text' class='textbox' id='buscador_gral_tipo_personeria_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_personeria.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_tipo_personeria_descripcion_comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.descripcion');
			if(trim($buscador_gral_tipo_personeria_descripcion_comparador) == '') $buscador_gral_tipo_personeria_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_personeria_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_personeria_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_tipo_personeria_codigo' type='text' class='textbox' id='buscador_gral_tipo_personeria_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_personeria.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_tipo_personeria_codigo_comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.codigo');
			if(trim($buscador_gral_tipo_personeria_codigo_comparador) == '') $buscador_gral_tipo_personeria_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_personeria_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_personeria_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_tipo_personeria_observacion' type='text' class='textbox' id='buscador_gral_tipo_personeria_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_personeria.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_tipo_personeria_observacion_comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.observacion');
			if(trim($buscador_gral_tipo_personeria_observacion_comparador) == '') $buscador_gral_tipo_personeria_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_personeria_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_personeria_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_tipo_personeria_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_tipo_personeria.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_tipo_personeria_estado_comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.estado');
			if(trim($buscador_gral_tipo_personeria_estado_comparador) == '') $buscador_gral_tipo_personeria_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_tipo_personeria_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_tipo_personeria_estado_comparador, 'textbox comparador') ?>
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

