<?php
include_once "_autoload.php";
$criterio = new Criterio(NovNovedadDestinatario::SES_CRITERIOS);
$criterio->addTabla('nov_novedad_destinatario');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='nov_novedad_destinatario'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('NovNovedad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_nov_novedad_destinatario_nov_novedad_id', Gral::getCmbFiltro(NovNovedad::getNovNovedadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_destinatario.nov_novedad_id'), 'textbox')?>
        	<?php 
			$buscador_nov_novedad_destinatario_nov_novedad_id_comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.nov_novedad_id');
			if(trim($buscador_nov_novedad_destinatario_nov_novedad_id_comparador) == '') $buscador_nov_novedad_destinatario_nov_novedad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_destinatario_nov_novedad_id_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_destinatario_nov_novedad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Usuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_nov_novedad_destinatario_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_destinatario.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_nov_novedad_destinatario_us_usuario_id_comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.us_usuario_id');
			if(trim($buscador_nov_novedad_destinatario_us_usuario_id_comparador) == '') $buscador_nov_novedad_destinatario_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_destinatario_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_destinatario_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_destinatario_descripcion' type='text' class='textbox' id='buscador_nov_novedad_destinatario_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_destinatario.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_destinatario_descripcion_comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.descripcion');
			if(trim($buscador_nov_novedad_destinatario_descripcion_comparador) == '') $buscador_nov_novedad_destinatario_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_destinatario_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_destinatario_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_destinatario_codigo' type='text' class='textbox' id='buscador_nov_novedad_destinatario_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_destinatario.codigo')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_destinatario_codigo_comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.codigo');
			if(trim($buscador_nov_novedad_destinatario_codigo_comparador) == '') $buscador_nov_novedad_destinatario_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_destinatario_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_destinatario_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_destinatario_observacion' type='text' class='textbox' id='buscador_nov_novedad_destinatario_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_destinatario.observacion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_destinatario_observacion_comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.observacion');
			if(trim($buscador_nov_novedad_destinatario_observacion_comparador) == '') $buscador_nov_novedad_destinatario_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_destinatario_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_destinatario_observacion_comparador, 'textbox comparador') ?>
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

