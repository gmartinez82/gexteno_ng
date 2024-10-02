<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaComisionista::SES_CRITERIOS);
$criterio->addTabla('vta_comisionista');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_comisionista'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comisionista_descripcion' type='text' class='textbox' id='buscador_vta_comisionista_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comisionista.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comisionista_descripcion_comparador = $criterio->getComparadorDeCampo('vta_comisionista.descripcion');
			if(trim($buscador_vta_comisionista_descripcion_comparador) == '') $buscador_vta_comisionista_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comisionista_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comisionista_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Apellido') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comisionista_apellido' type='text' class='textbox' id='buscador_vta_comisionista_apellido' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comisionista.apellido')) ?>' size='22' />
        	<?php 
			$buscador_vta_comisionista_apellido_comparador = $criterio->getComparadorDeCampo('vta_comisionista.apellido');
			if(trim($buscador_vta_comisionista_apellido_comparador) == '') $buscador_vta_comisionista_apellido_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comisionista_apellido_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comisionista_apellido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nombre') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comisionista_nombre' type='text' class='textbox' id='buscador_vta_comisionista_nombre' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comisionista.nombre')) ?>' size='22' />
        	<?php 
			$buscador_vta_comisionista_nombre_comparador = $criterio->getComparadorDeCampo('vta_comisionista.nombre');
			if(trim($buscador_vta_comisionista_nombre_comparador) == '') $buscador_vta_comisionista_nombre_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comisionista_nombre_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comisionista_nombre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comisionista_codigo' type='text' class='textbox' id='buscador_vta_comisionista_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comisionista.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_comisionista_codigo_comparador = $criterio->getComparadorDeCampo('vta_comisionista.codigo');
			if(trim($buscador_vta_comisionista_codigo_comparador) == '') $buscador_vta_comisionista_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comisionista_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comisionista_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comisionista_observacion' type='text' class='textbox' id='buscador_vta_comisionista_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comisionista.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comisionista_observacion_comparador = $criterio->getComparadorDeCampo('vta_comisionista.observacion');
			if(trim($buscador_vta_comisionista_observacion_comparador) == '') $buscador_vta_comisionista_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comisionista_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comisionista_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_comisionista_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb()), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comisionista.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_comisionista_estado_comparador = $criterio->getComparadorDeCampo('vta_comisionista.estado');
			if(trim($buscador_vta_comisionista_estado_comparador) == '') $buscador_vta_comisionista_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comisionista_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comisionista_estado_comparador, 'textbox comparador') ?>
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

