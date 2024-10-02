<?php
include_once "_autoload.php";
$criterio = new Criterio(UsMensaje::SES_CRITERIOS);
$criterio->addTabla('us_mensaje');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='us_mensaje'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_mensaje_descripcion' type='text' class='textbox' id='buscador_us_mensaje_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_mensaje.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_us_mensaje_descripcion_comparador = $criterio->getComparadorDeCampo('us_mensaje.descripcion');
			if(trim($buscador_us_mensaje_descripcion_comparador) == '') $buscador_us_mensaje_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_mensaje_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_us_mensaje_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Usuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_mensaje_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_mensaje.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_us_mensaje_us_usuario_id_comparador = $criterio->getComparadorDeCampo('us_mensaje.us_usuario_id');
			if(trim($buscador_us_mensaje_us_usuario_id_comparador) == '') $buscador_us_mensaje_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_mensaje_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_mensaje_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_mensaje_codigo' type='text' class='textbox' id='buscador_us_mensaje_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_mensaje.codigo')) ?>' size='22' />
        	<?php 
			$buscador_us_mensaje_codigo_comparador = $criterio->getComparadorDeCampo('us_mensaje.codigo');
			if(trim($buscador_us_mensaje_codigo_comparador) == '') $buscador_us_mensaje_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_mensaje_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_us_mensaje_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_mensaje_observacion' type='text' class='textbox' id='buscador_us_mensaje_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_mensaje.observacion')) ?>' size='22' />
        	<?php 
			$buscador_us_mensaje_observacion_comparador = $criterio->getComparadorDeCampo('us_mensaje.observacion');
			if(trim($buscador_us_mensaje_observacion_comparador) == '') $buscador_us_mensaje_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_mensaje_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_us_mensaje_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Leido') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_mensaje_leido' type='text' class='textbox' id='buscador_us_mensaje_leido' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_mensaje.leido')) ?>' size='22' />
        	<?php 
			$buscador_us_mensaje_leido_comparador = $criterio->getComparadorDeCampo('us_mensaje.leido');
			if(trim($buscador_us_mensaje_leido_comparador) == '') $buscador_us_mensaje_leido_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_mensaje_leido_comparador', Criterio::getComparadoresCmb(), $buscador_us_mensaje_leido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_mensaje_estado', Gral::getCmbFiltro(Est::getEstsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_mensaje.estado'), 'textbox')?>
        	<?php 
			$buscador_us_mensaje_estado_comparador = $criterio->getComparadorDeCampo('us_mensaje.estado');
			if(trim($buscador_us_mensaje_estado_comparador) == '') $buscador_us_mensaje_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_mensaje_estado_comparador', Criterio::getComparadoresCmb(), $buscador_us_mensaje_estado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_mensaje_creado' type='text' class='textbox' id='buscador_us_mensaje_creado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_mensaje.creado')) ?>' size='15' />
					<input type='button' id='cal_buscador_us_mensaje_creado' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_us_mensaje_creado', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_us_mensaje_creado'
						});
					</script>
		
        	<?php 
			$buscador_us_mensaje_creado_comparador = $criterio->getComparadorDeCampo('us_mensaje.creado');
			if(trim($buscador_us_mensaje_creado_comparador) == '') $buscador_us_mensaje_creado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_mensaje_creado_comparador', Criterio::getComparadoresCmb(), $buscador_us_mensaje_creado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_mensaje_modificado' type='text' class='textbox' id='buscador_us_mensaje_modificado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_mensaje.modificado')) ?>' size='15' />
					<input type='button' id='cal_buscador_us_mensaje_modificado' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_us_mensaje_modificado', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_us_mensaje_modificado'
						});
					</script>
		
        	<?php 
			$buscador_us_mensaje_modificado_comparador = $criterio->getComparadorDeCampo('us_mensaje.modificado');
			if(trim($buscador_us_mensaje_modificado_comparador) == '') $buscador_us_mensaje_modificado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_mensaje_modificado_comparador', Criterio::getComparadoresCmb(), $buscador_us_mensaje_modificado_comparador, 'textbox comparador') ?>
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

