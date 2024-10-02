<?php
include_once "_autoload.php";
$criterio = new Criterio(FndChqChequera::SES_CRITERIOS);
$criterio->addTabla('fnd_chq_chequera');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_chq_chequera'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_chequera_descripcion' type='text' class='textbox' id='buscador_fnd_chq_chequera_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_chequera.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_chequera_descripcion_comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.descripcion');
			if(trim($buscador_fnd_chq_chequera_descripcion_comparador) == '') $buscador_fnd_chq_chequera_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_chequera_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_chequera_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralBanco') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_chequera_gral_banco_id', Gral::getCmbFiltro(GralBanco::getGralBancosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_chequera.gral_banco_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_chequera_gral_banco_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.gral_banco_id');
			if(trim($buscador_fnd_chq_chequera_gral_banco_id_comparador) == '') $buscador_fnd_chq_chequera_gral_banco_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_chequera_gral_banco_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_chequera_gral_banco_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Sucursal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_chequera_codigo_sucursal' type='text' class='textbox' id='buscador_fnd_chq_chequera_codigo_sucursal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_chequera.codigo_sucursal')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_chequera_codigo_sucursal_comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.codigo_sucursal');
			if(trim($buscador_fnd_chq_chequera_codigo_sucursal_comparador) == '') $buscador_fnd_chq_chequera_codigo_sucursal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_chequera_codigo_sucursal_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_chequera_codigo_sucursal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Titular') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_chequera_titular' type='text' class='textbox' id='buscador_fnd_chq_chequera_titular' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_chequera.titular')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_chequera_titular_comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.titular');
			if(trim($buscador_fnd_chq_chequera_titular_comparador) == '') $buscador_fnd_chq_chequera_titular_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_chequera_titular_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_chequera_titular_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_chequera_codigo' type='text' class='textbox' id='buscador_fnd_chq_chequera_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_chequera.codigo')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_chequera_codigo_comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.codigo');
			if(trim($buscador_fnd_chq_chequera_codigo_comparador) == '') $buscador_fnd_chq_chequera_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_chequera_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_chequera_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_chequera_observacion' type='text' class='textbox' id='buscador_fnd_chq_chequera_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_chequera.observacion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_chequera_observacion_comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.observacion');
			if(trim($buscador_fnd_chq_chequera_observacion_comparador) == '') $buscador_fnd_chq_chequera_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_chequera_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_chequera_observacion_comparador, 'textbox comparador') ?>
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

