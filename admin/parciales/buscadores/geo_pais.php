<?php
include_once "_autoload.php";
$criterio = new Criterio(GeoPais::SES_CRITERIOS);
$criterio->addTabla('geo_pais');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='geo_pais'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_geo_pais_descripcion' type='text' class='textbox' id='buscador_geo_pais_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_pais.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_geo_pais_descripcion_comparador = $criterio->getComparadorDeCampo('geo_pais.descripcion');
			if(trim($buscador_geo_pais_descripcion_comparador) == '') $buscador_geo_pais_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_geo_pais_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_geo_pais_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Lenguaje') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_geo_pais_gral_lenguaje_id', Gral::getCmbFiltro(GralLenguaje::getGralLenguajesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_pais.gral_lenguaje_id'), 'textbox')?>
        	<?php 
			$buscador_geo_pais_gral_lenguaje_id_comparador = $criterio->getComparadorDeCampo('geo_pais.gral_lenguaje_id');
			if(trim($buscador_geo_pais_gral_lenguaje_id_comparador) == '') $buscador_geo_pais_gral_lenguaje_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_geo_pais_gral_lenguaje_id_comparador', Criterio::getComparadoresCmb(), $buscador_geo_pais_gral_lenguaje_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_geo_pais_codigo' type='text' class='textbox' id='buscador_geo_pais_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_pais.codigo')) ?>' size='22' />
        	<?php 
			$buscador_geo_pais_codigo_comparador = $criterio->getComparadorDeCampo('geo_pais.codigo');
			if(trim($buscador_geo_pais_codigo_comparador) == '') $buscador_geo_pais_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_geo_pais_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_geo_pais_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Telefonico') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_geo_pais_codigo_telefonico' type='text' class='textbox' id='buscador_geo_pais_codigo_telefonico' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_pais.codigo_telefonico')) ?>' size='22' />
        	<?php 
			$buscador_geo_pais_codigo_telefonico_comparador = $criterio->getComparadorDeCampo('geo_pais.codigo_telefonico');
			if(trim($buscador_geo_pais_codigo_telefonico_comparador) == '') $buscador_geo_pais_codigo_telefonico_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_geo_pais_codigo_telefonico_comparador', Criterio::getComparadoresCmb(), $buscador_geo_pais_codigo_telefonico_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_geo_pais_observacion' type='text' class='textbox' id='buscador_geo_pais_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_pais.observacion')) ?>' size='22' />
        	<?php 
			$buscador_geo_pais_observacion_comparador = $criterio->getComparadorDeCampo('geo_pais.observacion');
			if(trim($buscador_geo_pais_observacion_comparador) == '') $buscador_geo_pais_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_geo_pais_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_geo_pais_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_geo_pais_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_pais.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_geo_pais_estado_comparador = $criterio->getComparadorDeCampo('geo_pais.estado');
			if(trim($buscador_geo_pais_estado_comparador) == '') $buscador_geo_pais_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_geo_pais_estado_comparador', Criterio::getComparadoresCmb(), $buscador_geo_pais_estado_comparador, 'textbox comparador') ?>
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

