<?php
include_once "_autoload.php";
$criterio = new Criterio(NotNoticia::SES_CRITERIOS);
$criterio->addTabla('not_noticia');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='not_noticia'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Titulo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_noticia_descripcion' type='text' class='textbox' id='buscador_not_noticia_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_not_noticia_descripcion_comparador = $criterio->getComparadorDeCampo('not_noticia.descripcion');
			if(trim($buscador_not_noticia_descripcion_comparador) == '') $buscador_not_noticia_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_noticia_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('NotCategoria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_not_noticia_not_categoria_id', Gral::getCmbFiltro(NotCategoria::getNotCategoriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia.not_categoria_id'), 'textbox')?>
        	<?php 
			$buscador_not_noticia_not_categoria_id_comparador = $criterio->getComparadorDeCampo('not_noticia.not_categoria_id');
			if(trim($buscador_not_noticia_not_categoria_id_comparador) == '') $buscador_not_noticia_not_categoria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_not_noticia_not_categoria_id_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_not_categoria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_noticia_codigo' type='text' class='textbox' id='buscador_not_noticia_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia.codigo')) ?>' size='22' />
        	<?php 
			$buscador_not_noticia_codigo_comparador = $criterio->getComparadorDeCampo('not_noticia.codigo');
			if(trim($buscador_not_noticia_codigo_comparador) == '') $buscador_not_noticia_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_noticia_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Copete') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_noticia_copete' type='text' class='textbox' id='buscador_not_noticia_copete' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia.copete')) ?>' size='22' />
        	<?php 
			$buscador_not_noticia_copete_comparador = $criterio->getComparadorDeCampo('not_noticia.copete');
			if(trim($buscador_not_noticia_copete_comparador) == '') $buscador_not_noticia_copete_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_noticia_copete_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_copete_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cuerpo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_noticia_cuerpo' type='text' class='textbox' id='buscador_not_noticia_cuerpo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia.cuerpo')) ?>' size='22' />
        	<?php 
			$buscador_not_noticia_cuerpo_comparador = $criterio->getComparadorDeCampo('not_noticia.cuerpo');
			if(trim($buscador_not_noticia_cuerpo_comparador) == '') $buscador_not_noticia_cuerpo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_noticia_cuerpo_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_cuerpo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_noticia_fecha' type='text' class='textbox' id='buscador_not_noticia_fecha' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('not_noticia.fecha'))) ?>' size='15' />
					<input type='button' id='cal_buscador_not_noticia_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_not_noticia_fecha', ifFormat: '%d/%m/%Y', button: 'cal_buscador_not_noticia_fecha'
						});
					</script>
		
        	<?php 
			$buscador_not_noticia_fecha_comparador = $criterio->getComparadorDeCampo('not_noticia.fecha');
			if(trim($buscador_not_noticia_fecha_comparador) == '') $buscador_not_noticia_fecha_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_not_noticia_fecha_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_fecha_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Destacado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_not_noticia_destacado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia.destacado'), 'textbox') ?>
		
        	<?php 
			$buscador_not_noticia_destacado_comparador = $criterio->getComparadorDeCampo('not_noticia.destacado');
			if(trim($buscador_not_noticia_destacado_comparador) == '') $buscador_not_noticia_destacado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_not_noticia_destacado_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_destacado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_noticia_observacion' type='text' class='textbox' id='buscador_not_noticia_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia.observacion')) ?>' size='22' />
        	<?php 
			$buscador_not_noticia_observacion_comparador = $criterio->getComparadorDeCampo('not_noticia.observacion');
			if(trim($buscador_not_noticia_observacion_comparador) == '') $buscador_not_noticia_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_noticia_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_observacion_comparador, 'textbox comparador') ?>
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

