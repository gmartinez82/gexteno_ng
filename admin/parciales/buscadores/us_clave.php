<?php
include_once "_autoload.php";
$criterio = new Criterio(UsClave::SES_CRITERIOS);
$criterio->addTabla('us_clave');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='us_clave'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Usuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_clave_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_clave.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_us_clave_us_usuario_id_comparador = $criterio->getComparadorDeCampo('us_clave.us_usuario_id');
			if(trim($buscador_us_clave_us_usuario_id_comparador) == '') $buscador_us_clave_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_clave_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_clave_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Clave') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_clave_clave' type='text' class='textbox' id='buscador_us_clave_clave' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_clave.clave')) ?>' size='22' />
        	<?php 
			$buscador_us_clave_clave_comparador = $criterio->getComparadorDeCampo('us_clave.clave');
			if(trim($buscador_us_clave_clave_comparador) == '') $buscador_us_clave_clave_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_clave_clave_comparador', Criterio::getComparadoresCmb(), $buscador_us_clave_clave_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_clave_observacion' type='text' class='textbox' id='buscador_us_clave_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_clave.observacion')) ?>' size='22' />
        	<?php 
			$buscador_us_clave_observacion_comparador = $criterio->getComparadorDeCampo('us_clave.observacion');
			if(trim($buscador_us_clave_observacion_comparador) == '') $buscador_us_clave_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_clave_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_us_clave_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_us_clave_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_clave.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_us_clave_estado_comparador = $criterio->getComparadorDeCampo('us_clave.estado');
			if(trim($buscador_us_clave_estado_comparador) == '') $buscador_us_clave_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_clave_estado_comparador', Criterio::getComparadoresCmb(), $buscador_us_clave_estado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_clave_creado' type='text' class='textbox' id='buscador_us_clave_creado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_clave.creado')) ?>' size='15' />
					<input type='button' id='cal_buscador_us_clave_creado' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_us_clave_creado', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_us_clave_creado'
						});
					</script>
		
        	<?php 
			$buscador_us_clave_creado_comparador = $criterio->getComparadorDeCampo('us_clave.creado');
			if(trim($buscador_us_clave_creado_comparador) == '') $buscador_us_clave_creado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_clave_creado_comparador', Criterio::getComparadoresCmb(), $buscador_us_clave_creado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_clave_modificado' type='text' class='textbox' id='buscador_us_clave_modificado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_clave.modificado')) ?>' size='15' />
					<input type='button' id='cal_buscador_us_clave_modificado' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_us_clave_modificado', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_us_clave_modificado'
						});
					</script>
		
        	<?php 
			$buscador_us_clave_modificado_comparador = $criterio->getComparadorDeCampo('us_clave.modificado');
			if(trim($buscador_us_clave_modificado_comparador) == '') $buscador_us_clave_modificado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_clave_modificado_comparador', Criterio::getComparadoresCmb(), $buscador_us_clave_modificado_comparador, 'textbox comparador') ?>
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

