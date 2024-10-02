<?php
include_once "_autoload.php";
$criterio = new Criterio(InsMarcaImagen::SES_CRITERIOS);
$criterio->addTabla('ins_marca_imagen');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_marca_imagen'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsMarca') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_marca_imagen_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_marca_imagen.ins_marca_id'), 'textbox')?>
        	<?php 
			$buscador_ins_marca_imagen_ins_marca_id_comparador = $criterio->getComparadorDeCampo('ins_marca_imagen.ins_marca_id');
			if(trim($buscador_ins_marca_imagen_ins_marca_id_comparador) == '') $buscador_ins_marca_imagen_ins_marca_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_marca_imagen_ins_marca_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_marca_imagen_ins_marca_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_marca_imagen_descripcion' type='text' class='textbox' id='buscador_ins_marca_imagen_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_marca_imagen.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_marca_imagen_descripcion_comparador = $criterio->getComparadorDeCampo('ins_marca_imagen.descripcion');
			if(trim($buscador_ins_marca_imagen_descripcion_comparador) == '') $buscador_ins_marca_imagen_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_marca_imagen_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_marca_imagen_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_marca_imagen_codigo' type='text' class='textbox' id='buscador_ins_marca_imagen_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_marca_imagen.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_marca_imagen_codigo_comparador = $criterio->getComparadorDeCampo('ins_marca_imagen.codigo');
			if(trim($buscador_ins_marca_imagen_codigo_comparador) == '') $buscador_ins_marca_imagen_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_marca_imagen_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_marca_imagen_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_marca_imagen_observacion' type='text' class='textbox' id='buscador_ins_marca_imagen_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_marca_imagen.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_marca_imagen_observacion_comparador = $criterio->getComparadorDeCampo('ins_marca_imagen.observacion');
			if(trim($buscador_ins_marca_imagen_observacion_comparador) == '') $buscador_ins_marca_imagen_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_marca_imagen_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_marca_imagen_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_marca_imagen_archivo' type='text' class='textbox' id='buscador_ins_marca_imagen_archivo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_marca_imagen.archivo')) ?>' size='22' />
        	<?php 
			$buscador_ins_marca_imagen_archivo_comparador = $criterio->getComparadorDeCampo('ins_marca_imagen.archivo');
			if(trim($buscador_ins_marca_imagen_archivo_comparador) == '') $buscador_ins_marca_imagen_archivo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_marca_imagen_archivo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_marca_imagen_archivo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_marca_imagen_peso' type='text' class='textbox' id='buscador_ins_marca_imagen_peso' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_marca_imagen.peso')) ?>' size='22' />
        	<?php 
			$buscador_ins_marca_imagen_peso_comparador = $criterio->getComparadorDeCampo('ins_marca_imagen.peso');
			if(trim($buscador_ins_marca_imagen_peso_comparador) == '') $buscador_ins_marca_imagen_peso_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_marca_imagen_peso_comparador', Criterio::getComparadoresCmb(), $buscador_ins_marca_imagen_peso_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_marca_imagen_tipo' type='text' class='textbox' id='buscador_ins_marca_imagen_tipo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_marca_imagen.tipo')) ?>' size='22' />
        	<?php 
			$buscador_ins_marca_imagen_tipo_comparador = $criterio->getComparadorDeCampo('ins_marca_imagen.tipo');
			if(trim($buscador_ins_marca_imagen_tipo_comparador) == '') $buscador_ins_marca_imagen_tipo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_marca_imagen_tipo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_marca_imagen_tipo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_marca_imagen_alto' type='text' class='textbox' id='buscador_ins_marca_imagen_alto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_marca_imagen.alto')) ?>' size='22' />
        	<?php 
			$buscador_ins_marca_imagen_alto_comparador = $criterio->getComparadorDeCampo('ins_marca_imagen.alto');
			if(trim($buscador_ins_marca_imagen_alto_comparador) == '') $buscador_ins_marca_imagen_alto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_marca_imagen_alto_comparador', Criterio::getComparadoresCmb(), $buscador_ins_marca_imagen_alto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_marca_imagen_ancho' type='text' class='textbox' id='buscador_ins_marca_imagen_ancho' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_marca_imagen.ancho')) ?>' size='22' />
        	<?php 
			$buscador_ins_marca_imagen_ancho_comparador = $criterio->getComparadorDeCampo('ins_marca_imagen.ancho');
			if(trim($buscador_ins_marca_imagen_ancho_comparador) == '') $buscador_ins_marca_imagen_ancho_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_marca_imagen_ancho_comparador', Criterio::getComparadoresCmb(), $buscador_ins_marca_imagen_ancho_comparador, 'textbox comparador') ?>
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

