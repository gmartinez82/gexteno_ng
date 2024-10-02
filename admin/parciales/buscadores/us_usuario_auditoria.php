<?php
include_once "_autoload.php";
$criterio = new Criterio(UsUsuarioAuditoria::SES_CRITERIOS);
$criterio->addTabla('us_usuario_auditoria');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='us_usuario_auditoria'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_auditoria_descripcion' type='text' class='textbox' id='buscador_us_usuario_auditoria_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_auditoria_descripcion_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.descripcion');
			if(trim($buscador_us_usuario_auditoria_descripcion_comparador) == '') $buscador_us_usuario_auditoria_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Usuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_usuario_auditoria_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_us_usuario_auditoria_us_usuario_id_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.us_usuario_id');
			if(trim($buscador_us_usuario_auditoria_us_usuario_id_comparador) == '') $buscador_us_usuario_auditoria_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tabla') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_auditoria_tabla' type='text' class='textbox' id='buscador_us_usuario_auditoria_tabla' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.tabla')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_auditoria_tabla_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.tabla');
			if(trim($buscador_us_usuario_auditoria_tabla_comparador) == '') $buscador_us_usuario_auditoria_tabla_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_tabla_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_tabla_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Accion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_auditoria_accion' type='text' class='textbox' id='buscador_us_usuario_auditoria_accion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.accion')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_auditoria_accion_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.accion');
			if(trim($buscador_us_usuario_auditoria_accion_comparador) == '') $buscador_us_usuario_auditoria_accion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_accion_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_accion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Pagina') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_auditoria_pagina' type='text' class='textbox' id='buscador_us_usuario_auditoria_pagina' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.pagina')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_auditoria_pagina_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.pagina');
			if(trim($buscador_us_usuario_auditoria_pagina_comparador) == '') $buscador_us_usuario_auditoria_pagina_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_pagina_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_pagina_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Url') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_auditoria_url' type='text' class='textbox' id='buscador_us_usuario_auditoria_url' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.url')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_auditoria_url_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.url');
			if(trim($buscador_us_usuario_auditoria_url_comparador) == '') $buscador_us_usuario_auditoria_url_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_url_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_url_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Comando') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_auditoria_comando' type='text' class='textbox' id='buscador_us_usuario_auditoria_comando' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.comando')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_auditoria_comando_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.comando');
			if(trim($buscador_us_usuario_auditoria_comando_comparador) == '') $buscador_us_usuario_auditoria_comando_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_comando_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_comando_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Before') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_auditoria_dato_before' type='text' class='textbox' id='buscador_us_usuario_auditoria_dato_before' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.dato_before')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_auditoria_dato_before_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.dato_before');
			if(trim($buscador_us_usuario_auditoria_dato_before_comparador) == '') $buscador_us_usuario_auditoria_dato_before_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_dato_before_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_dato_before_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('After') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_auditoria_dato_after' type='text' class='textbox' id='buscador_us_usuario_auditoria_dato_after' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.dato_after')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_auditoria_dato_after_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.dato_after');
			if(trim($buscador_us_usuario_auditoria_dato_after_comparador) == '') $buscador_us_usuario_auditoria_dato_after_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_dato_after_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_dato_after_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_auditoria_observacion' type='text' class='textbox' id='buscador_us_usuario_auditoria_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.observacion')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_auditoria_observacion_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.observacion');
			if(trim($buscador_us_usuario_auditoria_observacion_comparador) == '') $buscador_us_usuario_auditoria_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_us_usuario_auditoria_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_us_usuario_auditoria_estado_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.estado');
			if(trim($buscador_us_usuario_auditoria_estado_comparador) == '') $buscador_us_usuario_auditoria_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_estado_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_estado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_auditoria_creado' type='text' class='textbox' id='buscador_us_usuario_auditoria_creado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_auditoria.creado')) ?>' size='15' />
					<input type='button' id='cal_buscador_us_usuario_auditoria_creado' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_us_usuario_auditoria_creado', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_us_usuario_auditoria_creado'
						});
					</script>
		
        	<?php 
			$buscador_us_usuario_auditoria_creado_comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.creado');
			if(trim($buscador_us_usuario_auditoria_creado_comparador) == '') $buscador_us_usuario_auditoria_creado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_auditoria_creado_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_auditoria_creado_comparador, 'textbox comparador') ?>
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

