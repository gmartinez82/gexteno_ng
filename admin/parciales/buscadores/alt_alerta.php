<?php
include_once "_autoload.php";
$criterio = new Criterio(AltAlerta::SES_CRITERIOS);
$criterio->addTabla('alt_alerta');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='alt_alerta'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Modulo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_alt_alerta_alt_modulo_id', Gral::getCmbFiltro(AltModulo::getAltModulosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta.alt_modulo_id'), 'textbox')?>
        	<?php 
			$buscador_alt_alerta_alt_modulo_id_comparador = $criterio->getComparadorDeCampo('alt_alerta.alt_modulo_id');
			if(trim($buscador_alt_alerta_alt_modulo_id_comparador) == '') $buscador_alt_alerta_alt_modulo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_alt_modulo_id_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_alt_modulo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_alt_alerta_alt_tipo_id', Gral::getCmbFiltro(AltTipo::getAltTiposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta.alt_tipo_id'), 'textbox')?>
        	<?php 
			$buscador_alt_alerta_alt_tipo_id_comparador = $criterio->getComparadorDeCampo('alt_alerta.alt_tipo_id');
			if(trim($buscador_alt_alerta_alt_tipo_id_comparador) == '') $buscador_alt_alerta_alt_tipo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_alt_tipo_id_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_alt_tipo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nivel') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_alt_alerta_alt_nivel_id', Gral::getCmbFiltro(AltNivel::getAltNivelsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta.alt_nivel_id'), 'textbox')?>
        	<?php 
			$buscador_alt_alerta_alt_nivel_id_comparador = $criterio->getComparadorDeCampo('alt_alerta.alt_nivel_id');
			if(trim($buscador_alt_alerta_alt_nivel_id_comparador) == '') $buscador_alt_alerta_alt_nivel_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_alt_nivel_id_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_alt_nivel_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Origen') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_alt_alerta_alt_origen_id', Gral::getCmbFiltro(AltOrigen::getAltOrigensCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta.alt_origen_id'), 'textbox')?>
        	<?php 
			$buscador_alt_alerta_alt_origen_id_comparador = $criterio->getComparadorDeCampo('alt_alerta.alt_origen_id');
			if(trim($buscador_alt_alerta_alt_origen_id_comparador) == '') $buscador_alt_alerta_alt_origen_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_alt_origen_id_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_alt_origen_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Control') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_alt_alerta_alt_control_id', Gral::getCmbFiltro(AltControl::getAltControlsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta.alt_control_id'), 'textbox')?>
        	<?php 
			$buscador_alt_alerta_alt_control_id_comparador = $criterio->getComparadorDeCampo('alt_alerta.alt_control_id');
			if(trim($buscador_alt_alerta_alt_control_id_comparador) == '') $buscador_alt_alerta_alt_control_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_alt_control_id_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_alt_control_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_descripcion' type='text' class='textbox' id='buscador_alt_alerta_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_descripcion_comparador = $criterio->getComparadorDeCampo('alt_alerta.descripcion');
			if(trim($buscador_alt_alerta_descripcion_comparador) == '') $buscador_alt_alerta_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_codigo' type='text' class='textbox' id='buscador_alt_alerta_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta.codigo')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_codigo_comparador = $criterio->getComparadorDeCampo('alt_alerta.codigo');
			if(trim($buscador_alt_alerta_codigo_comparador) == '') $buscador_alt_alerta_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Referencia') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_referencia' type='text' class='textbox' id='buscador_alt_alerta_referencia' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta.referencia')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_referencia_comparador = $criterio->getComparadorDeCampo('alt_alerta.referencia');
			if(trim($buscador_alt_alerta_referencia_comparador) == '') $buscador_alt_alerta_referencia_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_referencia_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_referencia_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Url Redirecc') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_url_redireccion' type='text' class='textbox' id='buscador_alt_alerta_url_redireccion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta.url_redireccion')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_url_redireccion_comparador = $criterio->getComparadorDeCampo('alt_alerta.url_redireccion');
			if(trim($buscador_alt_alerta_url_redireccion_comparador) == '') $buscador_alt_alerta_url_redireccion_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_url_redireccion_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_url_redireccion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_alerta_observacion' type='text' class='textbox' id='buscador_alt_alerta_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_alerta.observacion')) ?>' size='22' />
        	<?php 
			$buscador_alt_alerta_observacion_comparador = $criterio->getComparadorDeCampo('alt_alerta.observacion');
			if(trim($buscador_alt_alerta_observacion_comparador) == '') $buscador_alt_alerta_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_alerta_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_alt_alerta_observacion_comparador, 'textbox comparador') ?>
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

