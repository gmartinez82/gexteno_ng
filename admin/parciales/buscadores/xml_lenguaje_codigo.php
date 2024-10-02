<?php
include_once "_autoload.php";
$criterio = new Criterio(XmlLenguajeCodigo::SES_CRITERIOS);
$criterio->addTabla('xml_lenguaje_codigo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='xml_lenguaje_codigo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_codigo_descripcion' type='text' class='textbox' id='buscador_xml_lenguaje_codigo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_codigo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_codigo_descripcion_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.descripcion');
			if(trim($buscador_xml_lenguaje_codigo_descripcion_comparador) == '') $buscador_xml_lenguaje_codigo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_codigo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_codigo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('XmlLenguajeTipo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_tipo_id', Gral::getCmbFiltro(XmlLenguajeTipo::getXmlLenguajeTiposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_tipo_id'), 'textbox')?>
        	<?php 
			$buscador_xml_lenguaje_codigo_xml_lenguaje_tipo_id_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.xml_lenguaje_tipo_id');
			if(trim($buscador_xml_lenguaje_codigo_xml_lenguaje_tipo_id_comparador) == '') $buscador_xml_lenguaje_codigo_xml_lenguaje_tipo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_tipo_id_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_codigo_xml_lenguaje_tipo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('XmlLenguajePagina') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_pagina_id', Gral::getCmbFiltro(XmlLenguajePagina::getXmlLenguajePaginasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_pagina_id'), 'textbox')?>
        	<?php 
			$buscador_xml_lenguaje_codigo_xml_lenguaje_pagina_id_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.xml_lenguaje_pagina_id');
			if(trim($buscador_xml_lenguaje_codigo_xml_lenguaje_pagina_id_comparador) == '') $buscador_xml_lenguaje_codigo_xml_lenguaje_pagina_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_pagina_id_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_codigo_xml_lenguaje_pagina_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('XmlLenguajeEntorno') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_entorno_id', Gral::getCmbFiltro(XmlLenguajeEntorno::getXmlLenguajeEntornosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_entorno_id'), 'textbox')?>
        	<?php 
			$buscador_xml_lenguaje_codigo_xml_lenguaje_entorno_id_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.xml_lenguaje_entorno_id');
			if(trim($buscador_xml_lenguaje_codigo_xml_lenguaje_entorno_id_comparador) == '') $buscador_xml_lenguaje_codigo_xml_lenguaje_entorno_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_entorno_id_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_codigo_xml_lenguaje_entorno_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_codigo_codigo' type='text' class='textbox' id='buscador_xml_lenguaje_codigo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_codigo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_codigo_codigo_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.codigo');
			if(trim($buscador_xml_lenguaje_codigo_codigo_comparador) == '') $buscador_xml_lenguaje_codigo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_codigo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_codigo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_codigo_observacion' type='text' class='textbox' id='buscador_xml_lenguaje_codigo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_codigo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_codigo_observacion_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.observacion');
			if(trim($buscador_xml_lenguaje_codigo_observacion_comparador) == '') $buscador_xml_lenguaje_codigo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_codigo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_codigo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_xml_lenguaje_codigo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_codigo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_xml_lenguaje_codigo_estado_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.estado');
			if(trim($buscador_xml_lenguaje_codigo_estado_comparador) == '') $buscador_xml_lenguaje_codigo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_codigo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_codigo_estado_comparador, 'textbox comparador') ?>
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

