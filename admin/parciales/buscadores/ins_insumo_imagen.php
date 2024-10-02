<?php
include_once "_autoload.php";
$criterio = new Criterio(InsInsumoImagen::SES_CRITERIOS);
$criterio->addTabla('ins_insumo_imagen');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_insumo_imagen'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_imagen_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_imagen.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_imagen_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.ins_insumo_id');
			if(trim($buscador_ins_insumo_imagen_ins_insumo_id_comparador) == '') $buscador_ins_insumo_imagen_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_imagen_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_imagen_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsTipoImagen') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_imagen_ins_tipo_imagen_id', Gral::getCmbFiltro(InsTipoImagen::getInsTipoImagensCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_imagen.ins_tipo_imagen_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_imagen_ins_tipo_imagen_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.ins_tipo_imagen_id');
			if(trim($buscador_ins_insumo_imagen_ins_tipo_imagen_id_comparador) == '') $buscador_ins_insumo_imagen_ins_tipo_imagen_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_imagen_ins_tipo_imagen_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_imagen_ins_tipo_imagen_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_imagen_descripcion' type='text' class='textbox' id='buscador_ins_insumo_imagen_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_imagen.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_imagen_descripcion_comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.descripcion');
			if(trim($buscador_ins_insumo_imagen_descripcion_comparador) == '') $buscador_ins_insumo_imagen_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_imagen_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_imagen_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_imagen_codigo' type='text' class='textbox' id='buscador_ins_insumo_imagen_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_imagen.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_imagen_codigo_comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.codigo');
			if(trim($buscador_ins_insumo_imagen_codigo_comparador) == '') $buscador_ins_insumo_imagen_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_imagen_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_imagen_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_imagen_observacion' type='text' class='textbox' id='buscador_ins_insumo_imagen_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_imagen.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_imagen_observacion_comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.observacion');
			if(trim($buscador_ins_insumo_imagen_observacion_comparador) == '') $buscador_ins_insumo_imagen_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_imagen_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_imagen_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_imagen_archivo' type='text' class='textbox' id='buscador_ins_insumo_imagen_archivo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_imagen.archivo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_imagen_archivo_comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.archivo');
			if(trim($buscador_ins_insumo_imagen_archivo_comparador) == '') $buscador_ins_insumo_imagen_archivo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_imagen_archivo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_imagen_archivo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_imagen_peso' type='text' class='textbox' id='buscador_ins_insumo_imagen_peso' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_imagen.peso')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_imagen_peso_comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.peso');
			if(trim($buscador_ins_insumo_imagen_peso_comparador) == '') $buscador_ins_insumo_imagen_peso_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_imagen_peso_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_imagen_peso_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_imagen_tipo' type='text' class='textbox' id='buscador_ins_insumo_imagen_tipo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_imagen.tipo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_imagen_tipo_comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.tipo');
			if(trim($buscador_ins_insumo_imagen_tipo_comparador) == '') $buscador_ins_insumo_imagen_tipo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_imagen_tipo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_imagen_tipo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_imagen_alto' type='text' class='textbox' id='buscador_ins_insumo_imagen_alto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_imagen.alto')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_imagen_alto_comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.alto');
			if(trim($buscador_ins_insumo_imagen_alto_comparador) == '') $buscador_ins_insumo_imagen_alto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_imagen_alto_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_imagen_alto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_imagen_ancho' type='text' class='textbox' id='buscador_ins_insumo_imagen_ancho' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_imagen.ancho')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_imagen_ancho_comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.ancho');
			if(trim($buscador_ins_insumo_imagen_ancho_comparador) == '') $buscador_ins_insumo_imagen_ancho_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_imagen_ancho_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_imagen_ancho_comparador, 'textbox comparador') ?>
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

