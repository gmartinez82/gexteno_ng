<?php
include_once "_autoload.php";
$criterio = new Criterio(XmlLenguajeTraduccion::SES_CRITERIOS);
$criterio->addTabla('xml_lenguaje_traduccion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='xml_lenguaje_traduccion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Lenguaje') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_xml_lenguaje_traduccion_gral_lenguaje_id', Gral::getCmbFiltro(GralLenguaje::getGralLenguajesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_traduccion.gral_lenguaje_id'), 'textbox')?>
        	<?php 
			$buscador_xml_lenguaje_traduccion_gral_lenguaje_id_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.gral_lenguaje_id');
			if(trim($buscador_xml_lenguaje_traduccion_gral_lenguaje_id_comparador) == '') $buscador_xml_lenguaje_traduccion_gral_lenguaje_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_traduccion_gral_lenguaje_id_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_traduccion_gral_lenguaje_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Lenguaje Codigo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_xml_lenguaje_traduccion_xml_lenguaje_codigo_id', Gral::getCmbFiltro(XmlLenguajeCodigo::getXmlLenguajeCodigosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_traduccion.xml_lenguaje_codigo_id'), 'textbox')?>
        	<?php 
			$buscador_xml_lenguaje_traduccion_xml_lenguaje_codigo_id_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.xml_lenguaje_codigo_id');
			if(trim($buscador_xml_lenguaje_traduccion_xml_lenguaje_codigo_id_comparador) == '') $buscador_xml_lenguaje_traduccion_xml_lenguaje_codigo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_traduccion_xml_lenguaje_codigo_id_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_traduccion_xml_lenguaje_codigo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_traduccion_descripcion' type='text' class='textbox' id='buscador_xml_lenguaje_traduccion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_traduccion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_traduccion_descripcion_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.descripcion');
			if(trim($buscador_xml_lenguaje_traduccion_descripcion_comparador) == '') $buscador_xml_lenguaje_traduccion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_traduccion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_traduccion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_traduccion_codigo' type='text' class='textbox' id='buscador_xml_lenguaje_traduccion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_traduccion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_traduccion_codigo_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.codigo');
			if(trim($buscador_xml_lenguaje_traduccion_codigo_comparador) == '') $buscador_xml_lenguaje_traduccion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_traduccion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_traduccion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Traduccion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_traduccion_traduccion' type='text' class='textbox' id='buscador_xml_lenguaje_traduccion_traduccion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_traduccion.traduccion')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_traduccion_traduccion_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.traduccion');
			if(trim($buscador_xml_lenguaje_traduccion_traduccion_comparador) == '') $buscador_xml_lenguaje_traduccion_traduccion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_traduccion_traduccion_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_traduccion_traduccion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_traduccion_observacion' type='text' class='textbox' id='buscador_xml_lenguaje_traduccion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_traduccion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_traduccion_observacion_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.observacion');
			if(trim($buscador_xml_lenguaje_traduccion_observacion_comparador) == '') $buscador_xml_lenguaje_traduccion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_traduccion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_traduccion_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_xml_lenguaje_traduccion_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_traduccion.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_xml_lenguaje_traduccion_estado_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.estado');
			if(trim($buscador_xml_lenguaje_traduccion_estado_comparador) == '') $buscador_xml_lenguaje_traduccion_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_traduccion_estado_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_traduccion_estado_comparador, 'textbox comparador') ?>
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

