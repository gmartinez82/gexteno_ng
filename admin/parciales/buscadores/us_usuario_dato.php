<?php
include_once "_autoload.php";
$criterio = new Criterio(UsUsuarioDato::SES_CRITERIOS);
$criterio->addTabla('us_usuario_dato');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='us_usuario_dato'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Datos de Usuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_usuario_dato_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_dato.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_us_usuario_dato_us_usuario_id_comparador = $criterio->getComparadorDeCampo('us_usuario_dato.us_usuario_id');
			if(trim($buscador_us_usuario_dato_us_usuario_id_comparador) == '') $buscador_us_usuario_dato_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_usuario_dato_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_dato_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_dato_email' type='text' class='textbox' id='buscador_us_usuario_dato_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_dato.email')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_dato_email_comparador = $criterio->getComparadorDeCampo('us_usuario_dato.email');
			if(trim($buscador_us_usuario_dato_email_comparador) == '') $buscador_us_usuario_dato_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_dato_email_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_dato_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_dato_telefono' type='text' class='textbox' id='buscador_us_usuario_dato_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_dato.telefono')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_dato_telefono_comparador = $criterio->getComparadorDeCampo('us_usuario_dato.telefono');
			if(trim($buscador_us_usuario_dato_telefono_comparador) == '') $buscador_us_usuario_dato_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_dato_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_dato_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_dato_observacion' type='text' class='textbox' id='buscador_us_usuario_dato_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_dato.observacion')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_dato_observacion_comparador = $criterio->getComparadorDeCampo('us_usuario_dato.observacion');
			if(trim($buscador_us_usuario_dato_observacion_comparador) == '') $buscador_us_usuario_dato_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_dato_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_dato_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_us_usuario_dato_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario_dato.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_us_usuario_dato_estado_comparador = $criterio->getComparadorDeCampo('us_usuario_dato.estado');
			if(trim($buscador_us_usuario_dato_estado_comparador) == '') $buscador_us_usuario_dato_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_usuario_dato_estado_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_dato_estado_comparador, 'textbox comparador') ?>
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

