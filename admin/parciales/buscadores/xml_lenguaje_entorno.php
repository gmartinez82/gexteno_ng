<?php
include_once "_autoload.php";
$criterio = new Criterio(XmlLenguajeEntorno::SES_CRITERIOS);
$criterio->addTabla('xml_lenguaje_entorno');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='xml_lenguaje_entorno'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_entorno_descripcion' type='text' class='textbox' id='buscador_xml_lenguaje_entorno_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_entorno.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_entorno_descripcion_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.descripcion');
			if(trim($buscador_xml_lenguaje_entorno_descripcion_comparador) == '') $buscador_xml_lenguaje_entorno_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_entorno_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_entorno_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_entorno_codigo' type='text' class='textbox' id='buscador_xml_lenguaje_entorno_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_entorno.codigo')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_entorno_codigo_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.codigo');
			if(trim($buscador_xml_lenguaje_entorno_codigo_comparador) == '') $buscador_xml_lenguaje_entorno_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_entorno_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_entorno_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_entorno_observacion' type='text' class='textbox' id='buscador_xml_lenguaje_entorno_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_entorno.observacion')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_entorno_observacion_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_entorno.observacion');
			if(trim($buscador_xml_lenguaje_entorno_observacion_comparador) == '') $buscador_xml_lenguaje_entorno_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_entorno_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_entorno_observacion_comparador, 'textbox comparador') ?>
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

