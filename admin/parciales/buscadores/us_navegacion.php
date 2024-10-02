<?php
include_once "_autoload.php";
$criterio = new Criterio(UsNavegacion::SES_CRITERIOS);
$criterio->addTabla('us_navegacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='us_navegacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Usuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_navegacion_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_navegacion.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_us_navegacion_us_usuario_id_comparador = $criterio->getComparadorDeCampo('us_navegacion.us_usuario_id');
			if(trim($buscador_us_navegacion_us_usuario_id_comparador) == '') $buscador_us_navegacion_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_navegacion_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_navegacion_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Session') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_navegacion_session' type='text' class='textbox' id='buscador_us_navegacion_session' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_navegacion.session')) ?>' size='22' />
        	<?php 
			$buscador_us_navegacion_session_comparador = $criterio->getComparadorDeCampo('us_navegacion.session');
			if(trim($buscador_us_navegacion_session_comparador) == '') $buscador_us_navegacion_session_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_navegacion_session_comparador', Criterio::getComparadoresCmb(), $buscador_us_navegacion_session_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('IP') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_navegacion_ip' type='text' class='textbox' id='buscador_us_navegacion_ip' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_navegacion.ip')) ?>' size='22' />
        	<?php 
			$buscador_us_navegacion_ip_comparador = $criterio->getComparadorDeCampo('us_navegacion.ip');
			if(trim($buscador_us_navegacion_ip_comparador) == '') $buscador_us_navegacion_ip_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_navegacion_ip_comparador', Criterio::getComparadoresCmb(), $buscador_us_navegacion_ip_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Navegador') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_navegacion_navegador' type='text' class='textbox' id='buscador_us_navegacion_navegador' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_navegacion.navegador')) ?>' size='22' />
        	<?php 
			$buscador_us_navegacion_navegador_comparador = $criterio->getComparadorDeCampo('us_navegacion.navegador');
			if(trim($buscador_us_navegacion_navegador_comparador) == '') $buscador_us_navegacion_navegador_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_navegacion_navegador_comparador', Criterio::getComparadoresCmb(), $buscador_us_navegacion_navegador_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Pagina') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_navegacion_pagina' type='text' class='textbox' id='buscador_us_navegacion_pagina' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_navegacion.pagina')) ?>' size='22' />
        	<?php 
			$buscador_us_navegacion_pagina_comparador = $criterio->getComparadorDeCampo('us_navegacion.pagina');
			if(trim($buscador_us_navegacion_pagina_comparador) == '') $buscador_us_navegacion_pagina_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_navegacion_pagina_comparador', Criterio::getComparadoresCmb(), $buscador_us_navegacion_pagina_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Url') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_navegacion_url' type='text' class='textbox' id='buscador_us_navegacion_url' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_navegacion.url')) ?>' size='22' />
        	<?php 
			$buscador_us_navegacion_url_comparador = $criterio->getComparadorDeCampo('us_navegacion.url');
			if(trim($buscador_us_navegacion_url_comparador) == '') $buscador_us_navegacion_url_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_navegacion_url_comparador', Criterio::getComparadoresCmb(), $buscador_us_navegacion_url_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Url Anterior') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_navegacion_url_referer' type='text' class='textbox' id='buscador_us_navegacion_url_referer' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_navegacion.url_referer')) ?>' size='22' />
        	<?php 
			$buscador_us_navegacion_url_referer_comparador = $criterio->getComparadorDeCampo('us_navegacion.url_referer');
			if(trim($buscador_us_navegacion_url_referer_comparador) == '') $buscador_us_navegacion_url_referer_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_navegacion_url_referer_comparador', Criterio::getComparadoresCmb(), $buscador_us_navegacion_url_referer_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_navegacion_observacion' type='text' class='textbox' id='buscador_us_navegacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_navegacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_us_navegacion_observacion_comparador = $criterio->getComparadorDeCampo('us_navegacion.observacion');
			if(trim($buscador_us_navegacion_observacion_comparador) == '') $buscador_us_navegacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_navegacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_us_navegacion_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_us_navegacion_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_navegacion.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_us_navegacion_estado_comparador = $criterio->getComparadorDeCampo('us_navegacion.estado');
			if(trim($buscador_us_navegacion_estado_comparador) == '') $buscador_us_navegacion_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_navegacion_estado_comparador', Criterio::getComparadoresCmb(), $buscador_us_navegacion_estado_comparador, 'textbox comparador') ?>
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

