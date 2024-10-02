<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeReciboArchivo::SES_CRITERIOS);
$criterio->addTabla('pde_recibo_archivo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_recibo_archivo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_archivo_descripcion' type='text' class='textbox' id='buscador_pde_recibo_archivo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_archivo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recibo_archivo_descripcion_comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.descripcion');
			if(trim($buscador_pde_recibo_archivo_descripcion_comparador) == '') $buscador_pde_recibo_archivo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_archivo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_archivo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recibo_archivo_pde_recibo_id', Gral::getCmbFiltro(PdeRecibo::getPdeRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_archivo.pde_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recibo_archivo_pde_recibo_id_comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.pde_recibo_id');
			if(trim($buscador_pde_recibo_archivo_pde_recibo_id_comparador) == '') $buscador_pde_recibo_archivo_pde_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_archivo_pde_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_archivo_pde_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_archivo_codigo' type='text' class='textbox' id='buscador_pde_recibo_archivo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_archivo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_recibo_archivo_codigo_comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.codigo');
			if(trim($buscador_pde_recibo_archivo_codigo_comparador) == '') $buscador_pde_recibo_archivo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_archivo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_archivo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_archivo_observacion' type='text' class='textbox' id='buscador_pde_recibo_archivo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_archivo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recibo_archivo_observacion_comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.observacion');
			if(trim($buscador_pde_recibo_archivo_observacion_comparador) == '') $buscador_pde_recibo_archivo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_archivo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_archivo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_archivo_peso' type='text' class='textbox' id='buscador_pde_recibo_archivo_peso' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_archivo.peso')) ?>' size='22' />
        	<?php 
			$buscador_pde_recibo_archivo_peso_comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.peso');
			if(trim($buscador_pde_recibo_archivo_peso_comparador) == '') $buscador_pde_recibo_archivo_peso_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_archivo_peso_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_archivo_peso_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recibo_archivo_tipo' type='text' class='textbox' id='buscador_pde_recibo_archivo_tipo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recibo_archivo.tipo')) ?>' size='22' />
        	<?php 
			$buscador_pde_recibo_archivo_tipo_comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.tipo');
			if(trim($buscador_pde_recibo_archivo_tipo_comparador) == '') $buscador_pde_recibo_archivo_tipo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recibo_archivo_tipo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recibo_archivo_tipo_comparador, 'textbox comparador') ?>
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

