<?php
include_once "_autoload.php";
$criterio = new Criterio(UsCredencial::SES_CRITERIOS);
$criterio->addTabla('us_credencial');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='us_credencial'>
	
	<div class='par-buscador'>
	  <div class='label'><?php Lang::_lang('UsUsuario') ?></div>
	  <div class='dato'>
	  
		<?php Html::html_dib_select(1, 'buscador_us_acreditado_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb()), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_acreditado.us_usuario_id'), 'textbox')?>
		<?php 
		$buscador_us_acreditado_us_usuario_id_comparador = $criterio->getComparadorDeCampo('us_acreditado.us_usuario_id');
		if(trim($buscador_us_acreditado_us_usuario_id_comparador) == '') $buscador_us_acreditado_us_usuario_id_comparador = Criterio::IGUAL;
		
		Html::html_dib_select(1, 'buscador_us_acreditado_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_acreditado_us_usuario_id_comparador, 'textbox comparador') ?>
	  </div>
	</div>
	  
	<div class='par-buscador'>
	  <div class='label'><?php Lang::_lang('UsGrupo') ?></div>
	  <div class='dato'>
	  
		<?php Html::html_dib_select(1, 'buscador_us_agrupador_us_grupo_id', Gral::getCmbFiltro(UsGrupo::getUsGruposCmb()), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_agrupador.us_grupo_id'), 'textbox')?>
		<?php 
		$buscador_us_agrupador_us_grupo_id_comparador = $criterio->getComparadorDeCampo('us_agrupador.us_grupo_id');
		if(trim($buscador_us_agrupador_us_grupo_id_comparador) == '') $buscador_us_agrupador_us_grupo_id_comparador = Criterio::IGUAL;
		
		Html::html_dib_select(1, 'buscador_us_agrupador_us_grupo_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_agrupador_us_grupo_id_comparador, 'textbox comparador') ?>
	  </div>
	</div>
	  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_credencial_descripcion' type='text' class='textbox' id='buscador_us_credencial_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_credencial.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_us_credencial_descripcion_comparador = $criterio->getComparadorDeCampo('us_credencial.descripcion');
			if(trim($buscador_us_credencial_descripcion_comparador) == '') $buscador_us_credencial_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_credencial_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_us_credencial_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_credencial_codigo' type='text' class='textbox' id='buscador_us_credencial_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_credencial.codigo')) ?>' size='22' />
        	<?php 
			$buscador_us_credencial_codigo_comparador = $criterio->getComparadorDeCampo('us_credencial.codigo');
			if(trim($buscador_us_credencial_codigo_comparador) == '') $buscador_us_credencial_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_credencial_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_us_credencial_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_credencial_observacion' type='text' class='textbox' id='buscador_us_credencial_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_credencial.observacion')) ?>' size='22' />
        	<?php 
			$buscador_us_credencial_observacion_comparador = $criterio->getComparadorDeCampo('us_credencial.observacion');
			if(trim($buscador_us_credencial_observacion_comparador) == '') $buscador_us_credencial_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_credencial_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_us_credencial_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_us_credencial_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_credencial.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_us_credencial_estado_comparador = $criterio->getComparadorDeCampo('us_credencial.estado');
			if(trim($buscador_us_credencial_estado_comparador) == '') $buscador_us_credencial_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_credencial_estado_comparador', Criterio::getComparadoresCmb(), $buscador_us_credencial_estado_comparador, 'textbox comparador') ?>
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

