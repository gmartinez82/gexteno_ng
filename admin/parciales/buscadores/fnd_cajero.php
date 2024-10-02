<?php
include_once "_autoload.php";
$criterio = new Criterio(FndCajero::SES_CRITERIOS);
$criterio->addTabla('fnd_cajero');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_cajero'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_cajero_descripcion' type='text' class='textbox' id='buscador_fnd_cajero_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_cajero.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_cajero_descripcion_comparador = $criterio->getComparadorDeCampo('fnd_cajero.descripcion');
			if(trim($buscador_fnd_cajero_descripcion_comparador) == '') $buscador_fnd_cajero_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_cajero_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_cajero_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Apellido') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_cajero_apellido' type='text' class='textbox' id='buscador_fnd_cajero_apellido' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_cajero.apellido')) ?>' size='22' />
        	<?php 
			$buscador_fnd_cajero_apellido_comparador = $criterio->getComparadorDeCampo('fnd_cajero.apellido');
			if(trim($buscador_fnd_cajero_apellido_comparador) == '') $buscador_fnd_cajero_apellido_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_cajero_apellido_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_cajero_apellido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nombre') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_cajero_nombre' type='text' class='textbox' id='buscador_fnd_cajero_nombre' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_cajero.nombre')) ?>' size='22' />
        	<?php 
			$buscador_fnd_cajero_nombre_comparador = $criterio->getComparadorDeCampo('fnd_cajero.nombre');
			if(trim($buscador_fnd_cajero_nombre_comparador) == '') $buscador_fnd_cajero_nombre_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_cajero_nombre_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_cajero_nombre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_cajero_codigo' type='text' class='textbox' id='buscador_fnd_cajero_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_cajero.codigo')) ?>' size='22' />
        	<?php 
			$buscador_fnd_cajero_codigo_comparador = $criterio->getComparadorDeCampo('fnd_cajero.codigo');
			if(trim($buscador_fnd_cajero_codigo_comparador) == '') $buscador_fnd_cajero_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_cajero_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_cajero_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_cajero_observacion' type='text' class='textbox' id='buscador_fnd_cajero_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_cajero.observacion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_cajero_observacion_comparador = $criterio->getComparadorDeCampo('fnd_cajero.observacion');
			if(trim($buscador_fnd_cajero_observacion_comparador) == '') $buscador_fnd_cajero_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_cajero_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_cajero_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_cajero_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_cajero.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_cajero_estado_comparador = $criterio->getComparadorDeCampo('fnd_cajero.estado');
			if(trim($buscador_fnd_cajero_estado_comparador) == '') $buscador_fnd_cajero_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_cajero_estado_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_cajero_estado_comparador, 'textbox comparador') ?>
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

