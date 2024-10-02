<?php
include_once "_autoload.php";
$criterio = new Criterio(NotTipoImagen::SES_CRITERIOS);
$criterio->addTabla('not_tipo_imagen');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='not_tipo_imagen'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_tipo_imagen_descripcion' type='text' class='textbox' id='buscador_not_tipo_imagen_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_tipo_imagen.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_not_tipo_imagen_descripcion_comparador = $criterio->getComparadorDeCampo('not_tipo_imagen.descripcion');
			if(trim($buscador_not_tipo_imagen_descripcion_comparador) == '') $buscador_not_tipo_imagen_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_tipo_imagen_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_not_tipo_imagen_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_tipo_imagen_codigo' type='text' class='textbox' id='buscador_not_tipo_imagen_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_tipo_imagen.codigo')) ?>' size='22' />
        	<?php 
			$buscador_not_tipo_imagen_codigo_comparador = $criterio->getComparadorDeCampo('not_tipo_imagen.codigo');
			if(trim($buscador_not_tipo_imagen_codigo_comparador) == '') $buscador_not_tipo_imagen_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_tipo_imagen_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_not_tipo_imagen_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_tipo_imagen_observacion' type='text' class='textbox' id='buscador_not_tipo_imagen_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_tipo_imagen.observacion')) ?>' size='22' />
        	<?php 
			$buscador_not_tipo_imagen_observacion_comparador = $criterio->getComparadorDeCampo('not_tipo_imagen.observacion');
			if(trim($buscador_not_tipo_imagen_observacion_comparador) == '') $buscador_not_tipo_imagen_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_tipo_imagen_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_not_tipo_imagen_observacion_comparador, 'textbox comparador') ?>
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

