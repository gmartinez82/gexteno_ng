<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeTipoRecepcion::SES_CRITERIOS);
$criterio->addTabla('pde_tipo_recepcion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_tipo_recepcion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_recepcion_descripcion' type='text' class='textbox' id='buscador_pde_tipo_recepcion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_recepcion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_recepcion_descripcion_comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.descripcion');
			if(trim($buscador_pde_tipo_recepcion_descripcion_comparador) == '') $buscador_pde_tipo_recepcion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_recepcion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_recepcion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_recepcion_codigo' type='text' class='textbox' id='buscador_pde_tipo_recepcion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_recepcion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_recepcion_codigo_comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.codigo');
			if(trim($buscador_pde_tipo_recepcion_codigo_comparador) == '') $buscador_pde_tipo_recepcion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_recepcion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_recepcion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_recepcion_observacion' type='text' class='textbox' id='buscador_pde_tipo_recepcion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_recepcion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_recepcion_observacion_comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.observacion');
			if(trim($buscador_pde_tipo_recepcion_observacion_comparador) == '') $buscador_pde_tipo_recepcion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_recepcion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_recepcion_observacion_comparador, 'textbox comparador') ?>
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

