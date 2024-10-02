<?php
include_once "_autoload.php";
$criterio = new Criterio(XmlLenguajePagina::SES_CRITERIOS);
$criterio->addTabla('xml_lenguaje_pagina');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='xml_lenguaje_pagina'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_pagina_descripcion' type='text' class='textbox' id='buscador_xml_lenguaje_pagina_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_pagina.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_pagina_descripcion_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.descripcion');
			if(trim($buscador_xml_lenguaje_pagina_descripcion_comparador) == '') $buscador_xml_lenguaje_pagina_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_pagina_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_pagina_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_pagina_codigo' type='text' class='textbox' id='buscador_xml_lenguaje_pagina_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_pagina.codigo')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_pagina_codigo_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.codigo');
			if(trim($buscador_xml_lenguaje_pagina_codigo_comparador) == '') $buscador_xml_lenguaje_pagina_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_pagina_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_pagina_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_xml_lenguaje_pagina_observacion' type='text' class='textbox' id='buscador_xml_lenguaje_pagina_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('xml_lenguaje_pagina.observacion')) ?>' size='22' />
        	<?php 
			$buscador_xml_lenguaje_pagina_observacion_comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.observacion');
			if(trim($buscador_xml_lenguaje_pagina_observacion_comparador) == '') $buscador_xml_lenguaje_pagina_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_xml_lenguaje_pagina_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_xml_lenguaje_pagina_observacion_comparador, 'textbox comparador') ?>
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

